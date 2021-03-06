<?php

namespace App\Traits;

use Exception;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Factory;
use Symfony\Component\Debug\Exception\FatalThrowableError;
use Throwable;

/**
 * Class MakesInvoiceHtml.
 */
trait MakesInvoiceHtml
{
    /**
     * Generate the HTML invoice parsing variables
     * and generating the final invoice HTML
     *
     * @param string $design either the path to the design template, OR the full design template string
     * @param Collection $invoice The invoice object
     *
     * @return string           The invoice string in HTML format
     */
    public function generateInvoiceHtml($design, $invoice, $contact = null): string
    {
        //$variables = array_merge($invoice->makeLabels(), $invoice->makeValues());
        //$design = str_replace(array_keys($variables), array_values($variables), $design);

        $client = $invoice->customer;

        App::setLocale($client->preferredLocale());

        $labels = $invoice->makeLabels();
        $values = $invoice->makeValues($contact);

        $design = str_replace(array_keys($labels), array_values($labels), $design);
        $design = str_replace(array_keys($values), array_values($values), $design);

        $data['invoice'] = $invoice;

        return $this->renderView($design, $data);

        //return view($design, $data)->render();
    }

    /**
     * Parses the blade file string and processes the template variables
     *
     * @param string $string The Blade file string
     * @param array $data The array of template variables
     * @return string         The return HTML string
     *
     */
    public function renderView($string, $data): string
    {
        if (!$data) {
            $data = [];
        }

        $data['__env'] = app(Factory::class);

        $php = Blade::compileString($string);

        $obLevel = ob_get_level();
        ob_start();
        extract($data, EXTR_SKIP);

        try {
            eval('?' . '>' . $php);
        } catch (Exception $e) {
            while (ob_get_level() > $obLevel) {
                ob_end_clean();
            }

            throw $e;
        } catch (Throwable $e) {
            while (ob_get_level() > $obLevel) {
                ob_end_clean();
            }

            throw new FatalThrowableError($e);
        }

        return ob_get_clean();
    }
}
