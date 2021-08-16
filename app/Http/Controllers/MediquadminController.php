<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MediquadminController extends Controller
{

	    // semana 1 ejercicio
    public function semanas_ejercicio1()
    {
        $page_title = 'Ejercicio 1 a 3';
        $page_description = 'Ejercicios de la 1era a la 3era semana';

		$action = __FUNCTION__;

        return view('semanas.ejercicio', compact('page_title', 'page_description','action'));
    }

	    // carpetas de semana 1era a 4ta
    public function semanas_ejercicio4()
    {
        $page_title = 'semanas 4';
        $page_description = 'semanas 4';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        $action = __FUNCTION__;

        return view('semanas.ejercicio4', compact('page_title', 'page_description','action','logo','logoText'));
    }

        // carpeta de semana 5ta a 8va
        public function semanas_ejercicio5()
        {
            $page_title = 'semanas';
            $page_description = 'semanas';
            $logo = "images/logo.png";
            $logoText = "images/logo-text.png";
            $action = __FUNCTION__;

            return view('semanas.semanas', compact('page_title', 'page_description','action','logo','logoText'));
        }

         // carpeta de semana 5ta a 8va
         public function semanas_ejercicio6()
         {
             $page_title = 'semanas';
             $page_description = 'semanas';
             $logo = "images/logo.png";
             $logoText = "images/logo-text.png";
             $action = __FUNCTION__;

             return view('semanas.semanas', compact('page_title', 'page_description','action','logo','logoText'));
         }

          // carpeta de semana 5ta a 8va
        public function semanas_ejercicio7()
        {
            $page_title = 'semanas';
            $page_description = 'semanas';
            $logo = "images/logo.png";
            $logoText = "images/logo-text.png";
            $action = __FUNCTION__;

            return view('semanas.semanas', compact('page_title', 'page_description','action','logo','logoText'));
        }


         // carpeta de semana 5ta a 8va
         public function semanas_ejercicio8()
         {
             $page_title = 'semanas';
             $page_description = 'semanas';
             $logo = "images/logo.png";
             $logoText = "images/logo-text.png";
             $action = __FUNCTION__;

             return view('semanas.semanas', compact('page_title', 'page_description','action','logo','logoText'));
         }


          // carpeta de semana 5ta a 8va
        public function semanas6()
        {
            $page_title = 'semanas';
            $page_description = 'semanas';
            $logo = "images/logo.png";
            $logoText = "images/logo-text.png";
            $action = __FUNCTION__;

            return view('semanas.semanas', compact('page_title', 'page_description','action','logo','logoText'));
        }


         // carpeta de semana 5ta a 8va
         public function semanas7()
         {
             $page_title = 'semanas';
             $page_description = 'semanas';
             $logo = "images/logo.png";
             $logoText = "images/logo-text.png";
             $action = __FUNCTION__;

             return view('semanas.semanas', compact('page_title', 'page_description','action','logo','logoText'));
         }


          // carpeta de semana 5ta a 8va
        public function semanas()
        {
            $page_title = 'semanas';
            $page_description = 'semanas';
            $logo = "images/logo.png";
            $logoText = "images/logo-text.png";
            $action = __FUNCTION__;

            return view('semanas.semanas', compact('page_title', 'page_description','action','logo','logoText'));
        }


	    // Dashboard-1
    public function dashboard_1()
    {


        $page_title = 'Dashboard-1';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        $action = __FUNCTION__;

        return view('dashboard.index', compact('page_title', 'page_description','action','logo','logoText'));
    }

	    // Dashboard-2
    public function doctor_index()
    {
        $page_title = 'Doctors';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";

        $action = __FUNCTION__;

        return view('doctor.index', compact('page_title', 'page_description','action','logo','logoText'));
    }

	    // Dashboard-3
    public function doctors_details()
    {
        $page_title = 'Dashboard-3';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";

		$action = __FUNCTION__;

        return view('doctor.details', compact('page_title', 'page_description','action','logo','logoText'));
    }

	    // Doctors Review
    public function doctors_review()
    {

        $page_title = 'Doctors Review';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";

		$action = __FUNCTION__;

        return view('doctor.review', compact('page_title', 'page_description','action','logo','logoText'));
    }

	    // Patient Details
    public function patient_details()
    {
        $page_title = 'Patient Details';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";

		$action = __FUNCTION__;

        return view('doctor.pat_details', compact('page_title', 'page_description','action','logo','logoText'));
    }

    	    // Patient Details
            public function login()
            {
                $page_title = 'Patient Details';
                $page_description = 'Some description for the page';
                $logo = "images/logo.png";
                $logoText = "images/logo-text.png";

                $action = __FUNCTION__;

                return view('page.login', compact('page_title', 'page_description','action','logo','logoText'));
            }


            // Form Wizard
            public function form_wizard()
            {
                $page_title = 'From Wizard';
                $page_description = 'Some description for the page';

                $action = __FUNCTION__;

                return view('form.wizard', compact('page_title', 'page_description','action'));
            }

}
