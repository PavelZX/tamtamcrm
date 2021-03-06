<?php

namespace App\Designs;

class Modern extends AbstractDesign
{

    public function __construct()
    {
    }


    public function include()
    {
        return '
        	<!DOCTYPE html>
			<html lang="en">
			    <head>
			    	<title>$number</title>
			        <meta charset="utf-8">
			        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			        <meta http-equiv="x-ua-compatible" content="ie=edge">
			             <style>
			        
.bg-black{
    background-color:#000
}
.bg-white{
    background-color:#fff
}
.bg-gray-100{
    background-color:#f7fafc
}
.bg-gray-200{
    background-color:#edf2f7
}
.bg-gray-300{
    background-color:#e2e8f0
}
.bg-gray-800{
    background-color:#2d3748
}
.bg-gray-900{
    background-color:#1a202c
}
.bg-red-100{
    background-color:#fff5f5
}
.bg-red-300{
    background-color:#feb2b2
}
.bg-orange-600{
    background-color:#dd6b20
}
.bg-orange-700{
    background-color:#c05621
}
.bg-teal-600{
    background-color:#319795
}
.bg-blue-900{
    background-color:#2a4365
}
.border-black{
    border-color:#000
}
.border-white{
    border-color:#fff
}
.border-gray-300{
    border-color:#e2e8f0
}
.border-gray-400{
    border-color:#cbd5e0
}
.border-gray-900{
    border-color:#1a202c
}
.border-teal-600{
    border-color:#319795
}
.border-pink-700{
    border-color:#b83280
}
.rounded{
    border-radius:.25rem
}
.rounded-lg{
    border-radius:.5rem
}
.rounded-t-lg{
    border-top-left-radius:.5rem
}
.rounded-r-lg,.rounded-t-lg{
    border-top-right-radius:.5rem
}
.rounded-r-lg{
    border-bottom-right-radius:.5rem
}
.rounded-l-lg{
    border-top-left-radius:.5rem;
    border-bottom-left-radius:.5rem
}
.border-dashed{
    border-style:dashed
}
.border-4{
    border-width:4px
}
.border{
    border-width:1px
}
.border-t-2{
    border-top-width:2px
}
.border-l-2{
    border-left-width:2px
}
.border-t-4{
    border-top-width:4px
}
.border-b-4{
    border-bottom-width:4px
}
.border-t{
    border-top-width:1px
}
.border-r{
    border-right-width:1px
}
.border-b{
    border-bottom-width:1px
}
.border-l{
    border-left-width:1px
}
.inline-block{
    display:inline-block
}

.table{
    display:table
}

.items-center{
    align-items:center
}


.content-center{
    align-content:center
}
.font-normal{
    font-weight:400
}
.font-medium{
    font-weight:500
}
.font-semibold{
    font-weight:600
}
.font-bold{
    font-weight:700
}
.h-12{
    height:3rem
}
.h-24{
    height:6rem
}
.h-auto{
    height:auto
}
.m-3{
    margin:.75rem
}
.my-1{
    margin-top:.25rem;
    margin-bottom:.25rem
}
.mx-6{
    margin-left:1.5rem;
    margin-right:1.5rem
}
.my-10{
    margin-top:2.5rem;
    margin-bottom:2.5rem
}
.mx-10{
    margin-left:2.5rem;
    margin-right:2.5rem
}
.my-12{
    margin-top:3rem;
    margin-bottom:3rem
}
.my-16{
    margin-top:4rem;
    margin-bottom:4rem
}
.mx-16{
    margin-left:4rem;
    margin-right:4rem
}
.mt-1{
    margin-top:.25rem
}
.mt-2{
    margin-top:.5rem
}
.mr-2{
    margin-right:.5rem
}
.ml-2{
    margin-left:.5rem
}
.mt-4{
    margin-top:1rem
}
.mr-4{
    margin-right:1rem
}
.mb-4{
    margin-bottom:1rem
}
.ml-4{
    margin-left:1rem
}
.mt-5{
    margin-top:1.25rem
}
.mr-5{
    margin-right:1.25rem
}
.mt-6{
    margin-top:1.5rem
}
.mr-6{
    margin-right:1.5rem
}
.mb-6{
    margin-bottom:1.5rem
}
.ml-6{
    margin-left:1.5rem
}
.mt-8{
    margin-top:2rem
}
.mr-8{
    margin-right:2rem
}
.mb-8{
    margin-bottom:2rem
}
.ml-8{
    margin-left:2rem
}
.mt-10{
    margin-top:2.5rem
}
.mr-10{
    margin-right:2.5rem
}
.ml-10{
    margin-left:2.5rem
}
.mt-12{
    margin-top:3rem
}
.mt-16{
    margin-top:4rem
}
.mt-20{
    margin-top:5rem
}
.mt-24{
    margin-top:6rem
}
.ml-24{
    margin-left:6rem
}
.mt-32{
    margin-top:8rem
}
.mr-40{
    margin-right:10rem
}
.p-1{
    padding:.25rem
}
.p-5{
    padding:1.25rem
}
.p-12{
    padding:3rem
}
.p-16{
    padding:4rem
}
.p-px{
    padding:1px
}
.py-2{
    padding-top:.5rem;
    padding-bottom:.5rem
}
.px-2{
    padding-left:.5rem;
    padding-right:.5rem
}
.py-3{
    padding-top:.75rem;
    padding-bottom:.75rem
}
.px-3{
    padding-left:.75rem;
    padding-right:.75rem
}
.py-4{
    padding-top:1rem;
    padding-bottom:1rem
}
.px-4{
    padding-left:1rem;
    padding-right:1rem
}
.py-5{
    padding-top:1.25rem;
    padding-bottom:1.25rem
}
.px-5{
    padding-left:1.25rem;
    padding-right:1.25rem
}
.py-8{
    padding-top:2rem;
    padding-bottom:2rem
}
.px-8{
    padding-left:2rem;
    padding-right:2rem
}
.py-10{
    padding-top:2.5rem;
    padding-bottom:2.5rem
}
.px-10{
    padding-left:2.5rem;
    padding-right:2.5rem
}
.py-12{
    padding-top:3rem;
    padding-bottom:3rem
}
.px-12{
    padding-left:3rem;
    padding-right:3rem
}
.py-16{
    padding-top:4rem;
    padding-bottom:4rem
}
.px-16{
    padding-left:4rem;
    padding-right:4rem
}
.pr-2{
    padding-right:.5rem
}
.pt-4{
    padding-top:1rem
}
.pb-4{
    padding-bottom:1rem
}
.pl-4{
    padding-left:1rem
}
.pt-5{
    padding-top:1.25rem
}
.pb-6{
    padding-bottom:1.5rem
}
.pt-10{
    padding-top:2.5rem
}
.pt-12{
    padding-top:3rem
}
.pl-12{
    padding-left:3rem
}
.pb-16{
    padding-bottom:4rem
}
.pb-20{
    padding-bottom:5rem
}
.static{
    position:static
}
.absolute{
    position:absolute
}
.relative{
    position:relative
}
.bottom-0{
    bottom:0
}
.table-auto{
    table-layout:auto
}
.text-left{
    text-align:left
}
.text-right{
    text-align:right
}
.text-white{
    color:#fff
}
.text-gray-600{
    color:#718096
}
.text-red-700{
    color:#c53030
}
.text-red-800{
    color:#9b2c2c
}
.text-orange-600{
    color:#dd6b20
}
.text-orange-700{
    color:#c05621
}
.text-orange-800{
    color:#9c4221
}
.text-yellow-600{
    color:#d69e2e
}
.text-green-700{
    color:#2f855a
}
.text-teal-600{
    color:#319795
}
.text-blue-500{
    color:#4299e1
}
.text-blue-600{
    color:#3182ce
}
.text-pink-700{
    color:#b83280
}
.text-xl{
    font-size:1.25rem
}
.text-2xl{
    font-size:1.5rem
}
.text-5xl{
    font-size:3rem
}
.text-6xl{
    font-size:4rem
}
.uppercase{
    text-transform:uppercase
}
.tracking-tight{
    letter-spacing:-.025em
}
.align-middle{
    vertical-align:middle
}
.w-32{
    width:8rem
}
.w-40{
    width:10rem
}
.w-48{
    width:12rem
}
.w-56{
    width:14rem
}
.w-64{
    width:16rem
}
.w-auto{
    width:auto
}
.w-1\/2{
    width:50%
}
.w-1\/3{
    width:33.333333%
}
.w-2\/3{
    width:66.666667%
}
.w-1\/4{
    width:25%
}
.w-2\/5{
    width:40%
}
.w-full{
    width:100%
}

.pull-left {
float: left;
}
 
			        </style>
			    </head>
				<body>
        ';
    }


    public function header()
    {

        return '
		
				<div class="bg-orange-600 flex justify-between py-12 px-12">
					<div class="w-1/2">
						<h1 class="text-white font-bold text-5xl">$company.name</h1>
					</div>
					<div class="w-1/2 flex justify-end">
						<div class="w-56 flex flex-col text-white">
							$entity_labels
						</div>
						<div class="w-32 flex flex-col text-left text-white">
							$entity_details
						</div>
					</div>
				</div>
			';

    }

    public function body()
    {

        return '
			<div class="flex justify-between px-12 pt-12">
			    <div class="w-1/2">
			        $company_logo
			    </div>
			    <div class="w-1/2 flex justify-end">
			        <div class="w-56 flex flex-col">
			            $client_details
			        </div>
			        <div class="w-32">
			            <!-- -->
			        </div>
			    </div>
			</div>
			';

    }

    public function table_styles()
    {
        return [
            'table_header_thead_class' => "text-left text-white bg-gray-900",
            'table_header_td_class' => "px-4 py-2",
            'table_body_td_class' => "border-t border-b border-gray-900 px-4 py-4",
        ];
    }

    public function table()
    {

        return '
			<div class="px-12 pt-5 pb-20">
			    <table class="w-full table-auto mt-8">
			        <thead class="text-left text-white bg-gray-900">
			            <tr>
			                $table_header
			            </tr>
			        </thead>
			        <tbody>
			                $table_body
			        </tbody>
			    </table>
			    <div class="flex px-4 mt-6 w-full" style="page-break-inside: avoid;">
			        <div class="w-1/2">
			            $entity.public_notes
			        </div>
			        <div class="w-1/2 flex"">
			            <div class="w-1/2 text-right flex flex-col">
			                $total_tax_labels
			                $line_tax_labels
			            </div>
			            <div class="w-1/2 text-right flex flex-col">
			                $total_tax_values
			                $line_tax_values
			            </div>
			        </div>
			    </div>
			    <div class="flex px-4 mt-4 w-full items-end mt-5" style="page-break-inside: avoid;">
			        <div class="w-1/2">
			            <p class="font-semibold">$terms_label</p>
			            $terms
			        </div>
			    </div>
			    <div class="mt-8 px-4 py-2 bg-gray-900 text-white" style="page-break-inside: avoid;">
			        <div class="w-1/2"></div>
			        <div class="w-auto flex justify-end">
			            <div class="w-56">
			                <p class="font-bold">$balance_due_label</p>
			            </div>
			            <p>$balance_due</p>
			        </div>
			    </div>
			</div>
		';
    }

    public function footer()
    {

        return '
			<div class="bg-orange-600 flex justify-between py-8 px-12" style="page-break-inside: avoid;">
			    <div class="w-1/2">
			        <!-- // -->
			    </div>
			    <div class="w-1/2 flex justify-end">
			        <div class="w-56 flex flex-col text-white">
			            $company_details
			        </div>
			        <div class="w-32 flex flex-col text-left text-white">
			            $company_address
			        </div>
			    </div>
			</div>
			    </body>
			</html>
		';

    }

}
