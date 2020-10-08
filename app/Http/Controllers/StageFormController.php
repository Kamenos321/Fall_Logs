<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StageFormController extends Controller
{
    public function complete_1st()
    {
        if(array_key_exists('stage1', $_POST))
        {
            $stage1 = $_POST['stage1'];
        }
        return view('shows.create',[
            'stage1' => $stage1,
            'stage2' => null,
            'stage3' => null,
            'stage4' => null,
            'stage5' => null,
            'stage6' => null,
            'stage7' => null,
        ]);
    }
    
    public function complete_2nd()
    {
        if(array_key_exists('stage2', $_POST))
        {
            $stage2 = $_POST['stage2'];
        }
        if(array_key_exists('stage1', $_POST))
        {
            $stage1 = $_POST['stage1'];
        }
        
        return view('shows.create',[
            'stage1' => $stage1,
            'stage2' => $stage2,
            'stage3' => null,
            'stage4' => null,
            'stage5' => null,
            'stage6' => null,
            'stage7' => null,
        ]);
    }
    
    public function complete_3rd()
    {
        if(array_key_exists('stage3', $_POST))
        {
            $stage3 = $_POST['stage3'];
        }
        if(array_key_exists('stage2', $_POST))
        {
            $stage2 = $_POST['stage2'];
        }
        if(array_key_exists('stage1', $_POST))
        {
            $stage1 = $_POST['stage1'];
        }
        
        return view('shows.create',[
            'stage1' => $stage1,
            'stage2' => $stage2,
            'stage3' => $stage3,
            'stage4' => null,
            'stage5' => null,
            'stage6' => null,
            'stage7' => null,
        ]);
    }

    public function complete_4th()
    {
        if(array_key_exists('stage4', $_POST))
        {
            $stage4 = $_POST['stage4'];
        }
        if(array_key_exists('stage3', $_POST))
        {
            $stage3 = $_POST['stage3'];
        }
        if(array_key_exists('stage2', $_POST))
        {
            $stage2 = $_POST['stage2'];
        }
        if(array_key_exists('stage1', $_POST))
        {
            $stage1 = $_POST['stage1'];
        }
        
        return view('shows.create',[
            'stage1' => $stage1,
            'stage2' => $stage2,
            'stage3' => $stage3,
            'stage4' => $stage4,
            'stage5' => null,
            'stage6' => null,
            'stage7' => null,
        ]);
    }
    
    public function complete_5th()
    {
        if(array_key_exists('stage5', $_POST))
        {
            $stage5 = $_POST['stage5'];
        }
        if(array_key_exists('stage4', $_POST))
        {
            $stage4 = $_POST['stage4'];
        }
        if(array_key_exists('stage3', $_POST))
        {
            $stage3 = $_POST['stage3'];
        }
        if(array_key_exists('stage2', $_POST))
        {
            $stage2 = $_POST['stage2'];
        }
        if(array_key_exists('stage1', $_POST))
        {
            $stage1 = $_POST['stage1'];
        }
        
        return view('shows.create',[
            'stage1' => $stage1,
            'stage2' => $stage2,
            'stage3' => $stage3,
            'stage4' => $stage4,
            'stage5' => $stage5,
            'stage6' => null,
            'stage7' => null,
        ]);
    }
        
    public function complete_6th()
    {
        if(array_key_exists('stage6', $_POST))
        {
            $stage6 = $_POST['stage6'];
        }
        if(array_key_exists('stage5', $_POST))
        {
            $stage5 = $_POST['stage5'];
        }
        if(array_key_exists('stage4', $_POST))
        {
            $stage4 = $_POST['stage4'];
        }
        if(array_key_exists('stage3', $_POST))
        {
            $stage3 = $_POST['stage3'];
        }
        if(array_key_exists('stage2', $_POST))
        {
            $stage2 = $_POST['stage2'];
        }
        if(array_key_exists('stage1', $_POST))
        {
            $stage1 = $_POST['stage1'];
        }
        
        return view('shows.create',[
            'stage1' => $stage1,
            'stage2' => $stage2,
            'stage3' => $stage3,
            'stage4' => $stage4,
            'stage5' => $stage5,
            'stage6' => $stage6,
            'stage7' => null,
        ]);
    }

    public function complete_7th()
    {
        if(array_key_exists('stage7', $_POST))
        {
            $stage7 = $_POST['stage7'];
        }
        if(array_key_exists('stage6', $_POST))
        {
            $stage6 = $_POST['stage6'];
        }
        if(array_key_exists('stage5', $_POST))
        {
            $stage5 = $_POST['stage5'];
        }
        if(array_key_exists('stage4', $_POST))
        {
            $stage4 = $_POST['stage4'];
        }
        if(array_key_exists('stage3', $_POST))
        {
            $stage3 = $_POST['stage3'];
        }
        if(array_key_exists('stage2', $_POST))
        {
            $stage2 = $_POST['stage2'];
        }
        if(array_key_exists('stage1', $_POST))
        {
            $stage1 = $_POST['stage1'];
        }
        
        return view('shows.create',[
            'stage1' => $stage1,
            'stage2' => $stage2,
            'stage3' => $stage3,
            'stage4' => $stage4,
            'stage5' => $stage5,
            'stage6' => $stage6,
            'stage7' => $stage7,
        ]);
    }
}
