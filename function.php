<?php
	
	class allSubject{

		public $tc;
		public $tf;
		public $pc;
		public $pf;
		public $mark;

		public $sub1;
		public $sub2;
		public $sub3;
		public $sub4;
		public $sub5;
		public $sub6;
		public $sub7;
		public $sub8;

		function drawing($c,$d){
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			if ($pc<20 or $pf<20) {
				return 0;
			}
			else{
				$total = $pc+$pf;
			    return $total;
			}
			
		}

		function english($a,$b){
			$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$total = $tc+$tf;
			if ($total<40) {
				return 0;
			}
			else{
			    return $total;
			}
		}

		function math($a,$b,$c){
			$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$pc = $this->pc = $c;
			$theory = $tc+$tf;
			if ($theory<60 or $pc<20) {
				return 0;
			}
			else{
				$total = $theory+$pc;
			    return $total;
			}
		}

		function chemistry($a,$b,$c,$d){
			$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			$theory = $tc+$tf;
			if ($theory<60 or $pc<10 or $pf<10) {
				return 0;
			}
			else{
				$total = $theory+$pc+$pf;
				return $total;
			}
			
		}

		function fundamental($a,$b,$c,$d){
			$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			$theory = $tc+$tf;
			if ($theory<40 or $pc<10 or $pf<10) {
				return 0;
			}
			else{
				$total = $theory+$pc+$pf;
				return $total;
			}
		}
		function electricity($a,$b,$c,$d){
			$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			$theory = $tc+$tf;
			if ($theory<60 or $pc<10 or $pf<10) {
				return 0;
			}
			else{
				$total = $theory+$pc+$pf;
				return $total;
			}
		}
		function electronics($a,$b,$c,$d){
			$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			$theory = $tc+$tf;
			if ($theory<40 or $pc<10 or $pf<10) {
				return 0;
			}
			else{
				$total = $theory+$pc+$pf;
				return $total;
			}
		}

		// total mark 100 .......
		function drawing_grade($mark){
			$marks = $this->mark = $mark;
			if ($marks >= 80) {
				return 'A+';
			}
			else if ($marks<80 && $marks>=75) {
				return 'A';
			}
			else if ($marks<75 && $marks>=70) {
				return 'A-';
			}
			else if ($marks<70 && $marks>=65) {
				return 'B+';
			}
			else if ($marks<65 && $marks>=60) {
				return 'B';
			}
			else if ($marks<60 && $marks>=55) {
				return 'B-';
			}
			else if ($marks<55 && $marks>=50) {
				return 'C+';
			}
			else if ($marks<50 && $marks>=45) {
				return 'C';
			}
			else if ($marks<45 && $marks>=40) {
				return 'D';
			}
			else if ($marks<40) {
				return 'F';
			}
		}
		// total mark 100 ............
		function english_grade($mark){
			$marks = $this->mark = $mark;
			if ($marks >= 80) {
				return 'A+';
			}
			else if ($marks<80 && $marks>=75) {
				return 'A';
			}
			else if ($marks<75 && $marks>=70) {
				return 'A-';
			}
			else if ($marks<70 && $marks>=65) {
				return 'B+';
			}
			else if ($marks<65 && $marks>=60) {
				return 'B';
			}
			else if ($marks<60 && $marks>=55) {
				return 'B-';
			}
			else if ($marks<55 && $marks>=50) {
				return 'C+';
			}
			else if ($marks<50 && $marks>=45) {
				return 'C';
			}
			else if ($marks<45 && $marks>=40) {
				return 'D';
			}
			else if ($marks<40) {
				return 'F';
			}
		}
		// total mark 200 ..........
		function math_grade($mark){
			$marks = $this->mark = $mark;
			if ($marks >= 160) {
				return 'A+';
			}
			else if ($marks<160 && $marks>=150) {
				return 'A';
			}
			else if ($marks<150 && $marks>=140) {
				return 'A-';
			}
			else if ($marks<140 && $marks>=130) {
				return 'B+';
			}
			else if ($marks<130 && $marks>=120) {
				return 'B';
			}
			else if ($marks<120 && $marks>=110) {
				return 'B-';
			}
			else if ($marks<110 && $marks>=100) {
				return 'C+';
			}
			else if ($marks<100 && $marks>=90) {
				return 'C';
			}
			else if ($marks<90 && $marks>=80) {
				return 'D';
			}
			else if ($marks<80) {
				return 'F';
			}
		}
		//total mark 200 ........
		function chemistry_grade($mark){
			$marks = $this->mark = $mark;
			if ($marks >= 160) {
				return 'A+';
			}
			else if ($marks<160 && $marks>=150) {
				return 'A';
			}
			else if ($marks<150 && $marks>=140) {
				return 'A-';
			}
			else if ($marks<140 && $marks>=130) {
				return 'B+';
			}
			else if ($marks<130 && $marks>=120) {
				return 'B';
			}
			else if ($marks<120 && $marks>=110) {
				return 'B-';
			}
			else if ($marks<110 && $marks>=100) {
				return 'C+';
			}
			else if ($marks<100 && $marks>=90) {
				return 'C';
			}
			else if ($marks<90 && $marks>=80) {
				return 'D';
			}
			else if ($marks<80) {
				return 'F';
			}
		}
		// total mark 150 ......
		function fundamental_grade($mark){
			$marks = $this->mark = $mark;
			if ($marks >= 120) {
				return 'A+';
			}
			else if ($marks<120 && $marks>=112.5) {
				return 'A';
			}
			else if ($marks<112.5 && $marks>=105) {
				return 'A-';
			}
			else if ($marks<105 && $marks>=97.5) {
				return 'B+';
			}
			else if ($marks<97.5 && $marks>=90) {
				return 'B';
			}
			else if ($marks<90 && $marks>=82.5) {
				return 'B-';
			}
			else if ($marks<82.5 && $marks>=75) {
				return 'C+';
			}
			else if ($marks<75 && $marks>=67.5) {
				return 'C';
			}
			else if ($marks<67.5 && $marks>=60) {
				return 'D';
			}
			else if ($marks<60) {
				return 'F';
			}
		}
		// total mark 200 .........
		function electricity_grade($mark){
			$marks = $this->mark = $mark;
			if ($marks >= 160) {
				return 'A+';
			}
			else if ($marks<160 && $marks>=150) {
				return 'A';
			}
			else if ($marks<150 && $marks>=140) {
				return 'A-';
			}
			else if ($marks<140 && $marks>=130) {
				return 'B+';
			}
			else if ($marks<130 && $marks>=120) {
				return 'B';
			}
			else if ($marks<120 && $marks>=110) {
				return 'B-';
			}
			else if ($marks<110 && $marks>=100) {
				return 'C+';
			}
			else if ($marks<100 && $marks>=90) {
				return 'C';
			}
			else if ($marks<90 && $marks>=80) {
				return 'D';
			}
			else if ($marks<80) {
				return 'F';
			}
		}
		// total mark 150 ..........
		function electronics_grade($mark){
			$marks = $this->mark = $mark;
			if ($marks >= 120) {
				return 'A+';
			}
			else if ($marks<120 && $marks>=112.5) {
				return 'A';
			}
			else if ($marks<112.5 && $marks>=105) {
				return 'A-';
			}
			else if ($marks<105 && $marks>=97.5) {
				return 'B+';
			}
			else if ($marks<97.5 && $marks>=90) {
				return 'B';
			}
			else if ($marks<90 && $marks>=82.5) {
				return 'B-';
			}
			else if ($marks<82.5 && $marks>=75) {
				return 'C+';
			}
			else if ($marks<75 && $marks>=67.5) {
				return 'C';
			}
			else if ($marks<67.5 && $marks>=60) {
				return 'D';
			}
			else if ($marks<60) {
				return 'F';
			}
		}
		// total mark 100 ..............
		function drawing_point($mark){
			$marks = $this->mark = $mark;
			if ($marks >= 80) {
				return '4.00';
			}
			else if ($marks<80 && $marks>=75) {
				return '3.75';
			}
			else if ($marks<75 && $marks>=70) {
				return '3.50';
			}
			else if ($marks<70 && $marks>=65) {
				return '3.25';
			}
			else if ($marks<65 && $marks>=60) {
				return '3.00';
			}
			else if ($marks<60 && $marks>=55) {
				return '2.75';
			}
			else if ($marks<55 && $marks>=50) {
				return '2.50';
			}
			else if ($marks<50 && $marks>=45) {
				return '2.25';
			}
			else if ($marks<45 && $marks>=40) {
				return '2.00';
			}
			else if ($marks<40) {
				return '0.00';
			}
		}
		// total mark 100 ..............
		function english_point($mark){
			$marks = $this->mark = $mark;
			if ($marks >= 80) {
				return '4.00';
			}
			else if ($marks<80 && $marks>=75) {
				return '3.75';
			}
			else if ($marks<75 && $marks>=70) {
				return '3.50';
			}
			else if ($marks<70 && $marks>=65) {
				return '3.25';
			}
			else if ($marks<65 && $marks>=60) {
				return '3.00';
			}
			else if ($marks<60 && $marks>=55) {
				return '2.75';
			}
			else if ($marks<55 && $marks>=50) {
				return '2.50';
			}
			else if ($marks<50 && $marks>=45) {
				return '2.25';
			}
			else if ($marks<45 && $marks>=40) {
				return '2.00';
			}
			else if ($marks<40) {
				return '0.00';
			}
		}
		// total mark 200 ..............
		function math_point($mark){
			$marks = $this->mark = $mark;
			if ($marks >= 160) {
				return '4.00';
			}
			else if ($marks<160 && $marks>=150) {
				return '3.75';
			}
			else if ($marks<150 && $marks>=140) {
				return '3.50';
			}
			else if ($marks<140 && $marks>=130) {
				return '3.25';
			}
			else if ($marks<130 && $marks>=120) {
				return '3.00';
			}
			else if ($marks<120 && $marks>=110) {
				return '2.75';
			}
			else if ($marks<110 && $marks>=100) {
				return '2.50';
			}
			else if ($marks<100 && $marks>=90) {
				return '2.25';
			}
			else if ($marks<90 && $marks>=80) {
				return '2.00';
			}
			else if ($marks<80) {
				return '0.00';
			}
		}
		// total mark 200 ..............
		function chemistry_point($mark){
			$marks = $this->mark = $mark;
			if ($marks >= 160) {
				return '4.00';
			}
			else if ($marks<160 && $marks>=150) {
				return '3.75';
			}
			else if ($marks<150 && $marks>=140) {
				return '3.50';
			}
			else if ($marks<140 && $marks>=130) {
				return '3.25';
			}
			else if ($marks<130 && $marks>=120) {
				return '3.00';
			}
			else if ($marks<120 && $marks>=110) {
				return '2.75';
			}
			else if ($marks<110 && $marks>=100) {
				return '2.50';
			}
			else if ($marks<100 && $marks>=90) {
				return '2.25';
			}
			else if ($marks<90 && $marks>=80) {
				return '2.00';
			}
			else if ($marks<80) {
				return '0.00';
			}
		}
		// total mark 150 ..............
		function fundamental_point($mark){
			$marks = $this->mark = $mark;
			if ($marks >= 120) {
				return '4.00';
			}
			else if ($marks<120 && $marks>=112.5) {
				return '3.75';
			}
			else if ($marks<112.5 && $marks>=105) {
				return '3.50';
			}
			else if ($marks<105 && $marks>=97.5) {
				return '3.25';
			}
			else if ($marks<97.5 && $marks>=90) {
				return '3.00';
			}
			else if ($marks<90 && $marks>=82.5) {
				return '2.75';
			}
			else if ($marks<82.5 && $marks>=75) {
				return '2.50';
			}
			else if ($marks<75 && $marks>=67.5) {
				return '2.25';
			}
			else if ($marks<67.5 && $marks>=60) {
				return '2.00';
			}
			else if ($marks<60) {
				return '0.00';
			}
		}
		// total mark 200 ..............
		function electricity_point($mark){
			$marks = $this->mark = $mark;
			if ($marks >= 160) {
				return '4.00';
			}
			else if ($marks<160 && $marks>=150) {
				return '3.75';
			}
			else if ($marks<150 && $marks>=140) {
				return '3.50';
			}
			else if ($marks<140 && $marks>=130) {
				return '3.25';
			}
			else if ($marks<130 && $marks>=120) {
				return '3.00';
			}
			else if ($marks<120 && $marks>=110) {
				return '2.75';
			}
			else if ($marks<110 && $marks>=100) {
				return '2.50';
			}
			else if ($marks<100 && $marks>=90) {
				return '2.25';
			}
			else if ($marks<90 && $marks>=80) {
				return '2.00';
			}
			else if ($marks<80) {
				return '0.00';
			}
		}
		//total mark 150 ....
		function electronics_point($mark){
			$marks = $this->mark = $mark;
			if ($marks >= 120) {
				return '4.00';
			}
			else if ($marks<120 && $marks>=112.5) {
				return '3.75';
			}
			else if ($marks<112.5 && $marks>=105) {
				return '3.50';
			}
			else if ($marks<105 && $marks>=97.5) {
				return '3.25';
			}
			else if ($marks<97.5 && $marks>=90) {
				return '3.00';
			}
			else if ($marks<90 && $marks>=82.5) {
				return '2.75';
			}
			else if ($marks<82.5 && $marks>=75) {
				return '2.50';
			}
			else if ($marks<75 && $marks>=67.5) {
				return '2.25';
			}
			else if ($marks<67.5 && $marks>=60) {
				return '2.00';
			}
			else if ($marks<60) {
				return '0.00';
			}
		}
		// cgpa total point
		function grade_average_com_1st_seme($a,$b,$c,$d,$e,$f,$g){

			$s1 = $this->sub1 = $a*2;
			$s2 = $this->sub2 = $b*2;
			$s3 = $this->sub3 = $c*4;
			$s4 = $this->sub4 = $d*4;
			$s5 = $this->sub5 = $e*3;
			$s6 = $this->sub6 = $f*4;
			$s7 = $this->sub7 = $g*3;

			$cgp = $s1+$s2+$s3+$s4+$s5+$s6+$s7;
			
			$cgpa = $cgp/22.5;
			return $cgpa;

		}
		
// computer first semester all function end here.............end
//**************************************************************//
//**************************************************************//
//**************************************************************//
//computer second semester start from here....................start
		//obtain mark..........

		function english2($a,$b,$c){
			$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$pc = $this->pc = $c;
			$theory = $tc+$tf;
			if ($theory<40 or $pc<20) {
				return 0;
			}
			else{
				$total = $theory+$pc;
				return $total;
			}
		}

        function physical_edu($c,$d){
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			if ($pc<10 or $pf<10) {
				return 0;
			}
			else{
				$total = $pc+$pf;
				return $total;
			}
        } 

        function physics($a,$b,$c,$d){
        	$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			$theory = $tc+$tf;
			if ($theory<60 or $pc<10 or $pf<10) {
				return 0;
			}
			else{
				$total = $theory+$pc+$pf;
				return $total;
			}
        }

        function com_application($c,$d){
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			if ($pc<20 or $pf<20) {
				return 0;
			}
			else{
				$total = $pc+$pf;
				return $total;
			}
        }

        function bangla($a,$b,$c){
        	$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$pc = $this->pc = $c;
			$theory = $tc+$tf;
			if ($theory<40 or $pc<20) {
				return 0;
			}
			else{
				$total = $theory+$pc;
				return $total;
			}
        } 

        function electronics_d_c($a,$b,$c,$d){
        	$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			$theory = $tc+$tf;
			if ($theory<60 or $pc<10 or $pf<10) {
				return 0;
			}
			else{
				$total = $theory+$pc+$pf;
				return $total;
			}
        }
        function b_workshop($c,$d){
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			if ($pc<20 or $pf<20) {
				return 0;
			}
			else{
				$total = $pc+$pf;
				return $total;
			}
        }
        //grade ............
        
        //total mark 150 .......
        function english2_grade($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 120) {
				return 'A+';
			}
			else if ($marks<120 && $marks>=112.5) {
				return 'A';
			}
			else if ($marks<112.5 && $marks>=105) {
				return 'A-';
			}
			else if ($marks<105 && $marks>=97.5) {
				return 'B+';
			}
			else if ($marks<97.5 && $marks>=90) {
				return 'B';
			}
			else if ($marks<90 && $marks>=82.5) {
				return 'B-';
			}
			else if ($marks<82.5 && $marks>=75) {
				return 'C+';
			}
			else if ($marks<75 && $marks>=67.5) {
				return 'C';
			}
			else if ($marks<67.5 && $marks>=60) {
				return 'D';
			}
			else if ($marks<60) {
				return 'F';
			}
        }
        //total mark 50 ......
        function physical_edu_grade($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 40) {
				return 'A+';
			}
			else if ($marks<40 && $marks>=37.5) {
				return 'A';
			}
			else if ($marks<37.5 && $marks>=35) {
				return 'A-';
			}
			else if ($marks<35 && $marks>=32.5) {
				return 'B+';
			}
			else if ($marks<32.5 && $marks>=30) {
				return 'B';
			}
			else if ($marks<30 && $marks>=27.5) {
				return 'B-';
			}
			else if ($marks<27.5 && $marks>=25) {
				return 'C+';
			}
			else if ($marks<25 && $marks>=22.5) {
				return 'C';
			}
			else if ($marks<22.5 && $marks>=20) {
				return 'D';
			}
			else if ($marks<20) {
				return 'F';
			}
        }
        //total mark 200 ...........
        function physics_grade($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 160) {
				return 'A+';
			}
			else if ($marks<160 && $marks>=150) {
				return 'A';
			}
			else if ($marks<150 && $marks>=140) {
				return 'A-';
			}
			else if ($marks<140 && $marks>=130) {
				return 'B+';
			}
			else if ($marks<130 && $marks>=120) {
				return 'B';
			}
			else if ($marks<120 && $marks>=110) {
				return 'B-';
			}
			else if ($marks<110 && $marks>=100) {
				return 'C+';
			}
			else if ($marks<100 && $marks>=90) {
				return 'C';
			}
			else if ($marks<90 && $marks>=80) {
				return 'D';
			}
			else if ($marks<80) {
				return 'F';
			}
        }
        //total mark 100 ..............
        function com_application_grade($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 80) {
				return 'A+';
			}
			else if ($marks<80 && $marks>=75) {
				return 'A';
			}
			else if ($marks<75 && $marks>=70) {
				return 'A-';
			}
			else if ($marks<70 && $marks>=65) {
				return 'B+';
			}
			else if ($marks<65 && $marks>=60) {
				return 'B';
			}
			else if ($marks<60 && $marks>=55) {
				return 'B-';
			}
			else if ($marks<55 && $marks>=50) {
				return 'C+';
			}
			else if ($marks<50 && $marks>=45) {
				return 'C';
			}
			else if ($marks<45 && $marks>=40) {
				return 'D';
			}
			else if ($marks<40) {
				return 'F';
			}
        }
        //toal mark 150 .........
        function bangla_grade($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 120) {
				return 'A+';
			}
			else if ($marks<120 && $marks>=112.5) {
				return 'A';
			}
			else if ($marks<112.5 && $marks>=105) {
				return 'A-';
			}
			else if ($marks<105 && $marks>=97.5) {
				return 'B+';
			}
			else if ($marks<97.5 && $marks>=90) {
				return 'B';
			}
			else if ($marks<90 && $marks>=82.5) {
				return 'B-';
			}
			else if ($marks<82.5 && $marks>=75) {
				return 'C+';
			}
			else if ($marks<75 && $marks>=67.5) {
				return 'C';
			}
			else if ($marks<67.5 && $marks>=60) {
				return 'D';
			}
			else if ($marks<60) {
				return 'F';
			}
        }
        // total mark 200 .......
        function electronics_d_c_grade($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 160) {
				return 'A+';
			}
			else if ($marks<160 && $marks>=150) {
				return 'A';
			}
			else if ($marks<150 && $marks>=140) {
				return 'A-';
			}
			else if ($marks<140 && $marks>=130) {
				return 'B+';
			}
			else if ($marks<130 && $marks>=120) {
				return 'B';
			}
			else if ($marks<120 && $marks>=110) {
				return 'B-';
			}
			else if ($marks<110 && $marks>=100) {
				return 'C+';
			}
			else if ($marks<100 && $marks>=90) {
				return 'C';
			}
			else if ($marks<90 && $marks>=80) {
				return 'D';
			}
			else if ($marks<80) {
				return 'F';
			}

        }
        // total mark 100 ........
        function b_workshop_grade($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 80) {
				return 'A+';
			}
			else if ($marks<80 && $marks>=75) {
				return 'A';
			}
			else if ($marks<75 && $marks>=70) {
				return 'A-';
			}
			else if ($marks<70 && $marks>=65) {
				return 'B+';
			}
			else if ($marks<65 && $marks>=60) {
				return 'B';
			}
			else if ($marks<60 && $marks>=55) {
				return 'B-';
			}
			else if ($marks<55 && $marks>=50) {
				return 'C+';
			}
			else if ($marks<50 && $marks>=45) {
				return 'C';
			}
			else if ($marks<45 && $marks>=40) {
				return 'D';
			}
			else if ($marks<40) {
				return 'F';
			}
        } 
        //points............
        // total mark 150 ..............
        function english2_point($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 120) {
				return '4.00';
			}
			else if ($marks<120 && $marks>=112.5) {
				return '3.75';
			}
			else if ($marks<112.5 && $marks>=105) {
				return '3.50';
			}
			else if ($marks<105 && $marks>=97.5) {
				return '3.25';
			}
			else if ($marks<97.5 && $marks>=90) {
				return '3.00';
			}
			else if ($marks<90 && $marks>=82.5) {
				return '2.75';
			}
			else if ($marks<82.5 && $marks>=75) {
				return '2.50';
			}
			else if ($marks<75 && $marks>=67.5) {
				return '2.25';
			}
			else if ($marks<67.5 && $marks>=60) {
				return '2.00';
			}
			else if ($marks<60) {
				return '0.00';
			}
        }
        // total mark 50 .................
        function physical_edu_point($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 40) {
				return '4.00';
			}
			else if ($marks<40 && $marks>=37.5) {
				return '3.75';
			}
			else if ($marks<37.5 && $marks>=35) {
				return '3.50';
			}
			else if ($marks<35 && $marks>=32.5) {
				return '3.25';
			}
			else if ($marks<32.5 && $marks>=30) {
				return '3.00';
			}
			else if ($marks<30 && $marks>=27.5) {
				return '2.75';
			}
			else if ($marks<27.5 && $marks>=25) {
				return '2.50';
			}
			else if ($marks<25 && $marks>=22.5) {
				return '2.25';
			}
			else if ($marks<22.5 && $marks>=20) {
				return '2.00';
			}
			else if ($marks<20) {
				return '0.00';
			}
        }
        // total mark 200 ................
        function physics_point($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 160) {
				return '4.00';
			}
			else if ($marks<160 && $marks>=150) {
				return '3.75';
			}
			else if ($marks<150 && $marks>=140) {
				return '3.50';
			}
			else if ($marks<140 && $marks>=130) {
				return '3.25';
			}
			else if ($marks<130 && $marks>=120) {
				return '3.00';
			}
			else if ($marks<120 && $marks>=110) {
				return '2.75';
			}
			else if ($marks<110 && $marks>=100) {
				return '2.50';
			}
			else if ($marks<100 && $marks>=90) {
				return '2.25';
			}
			else if ($marks<90 && $marks>=80) {
				return '2.00';
			}
			else if ($marks<80) {
				return '0.00';
			}
        }
        // total mark 100 .............
        function com_application_point($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 80) {
				return '4.00';
			}
			else if ($marks<80 && $marks>=75) {
				return '3.75';
			}
			else if ($marks<75 && $marks>=70) {
				return '3.50';
			}
			else if ($marks<70 && $marks>=65) {
				return '3.25';
			}
			else if ($marks<65 && $marks>=60) {
				return '3.00';
			}
			else if ($marks<60 && $marks>=55) {
				return '2.75';
			}
			else if ($marks<55 && $marks>=50) {
				return '2.50';
			}
			else if ($marks<50 && $marks>=45) {
				return '2.25';
			}
			else if ($marks<45 && $marks>=40) {
				return '2.00';
			}
			else if ($marks<40) {
				return '0.00';
			}
        }
        // total mark 150 .........
        function bangla_point($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 120) {
				return '4.00';
			}
			else if ($marks<120 && $marks>=112.5) {
				return '3.75';
			}
			else if ($marks<112.5 && $marks>=105) {
				return '3.50';
			}
			else if ($marks<105 && $marks>=97.5) {
				return '3.25';
			}
			else if ($marks<97.5 && $marks>=90) {
				return '3.00';
			}
			else if ($marks<90 && $marks>=82.5) {
				return '2.75';
			}
			else if ($marks<82.5 && $marks>=75) {
				return '2.50';
			}
			else if ($marks<75 && $marks>=67.5) {
				return '2.25';
			}
			else if ($marks<67.5 && $marks>=60) {
				return '2.00';
			}
			else if ($marks<60) {
				return '0.00';
			}
        }
        // total mark 200 .........
        function electronics_d_c_point($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 160) {
				return '4.00';
			}
			else if ($marks<160 && $marks>=150) {
				return '3.75';
			}
			else if ($marks<150 && $marks>=140) {
				return '3.50';
			}
			else if ($marks<140 && $marks>=130) {
				return '3.25';
			}
			else if ($marks<130 && $marks>=120) {
				return '3.00';
			}
			else if ($marks<120 && $marks>=110) {
				return '2.75';
			}
			else if ($marks<110 && $marks>=100) {
				return '2.50';
			}
			else if ($marks<100 && $marks>=90) {
				return '2.25';
			}
			else if ($marks<90 && $marks>=80) {
				return '2.00';
			}
			else if ($marks<80) {
				return '0.00';
			}
        }
        // total mark 100 .............
        function b_workshop_point($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 80) {
				return '4.00';
			}
			else if ($marks<80 && $marks>=75) {
				return '3.75';
			}
			else if ($marks<75 && $marks>=70) {
				return '3.50';
			}
			else if ($marks<70 && $marks>=65) {
				return '3.25';
			}
			else if ($marks<65 && $marks>=60) {
				return '3.00';
			}
			else if ($marks<60 && $marks>=55) {
				return '2.75';
			}
			else if ($marks<55 && $marks>=50) {
				return '2.50';
			}
			else if ($marks<50 && $marks>=45) {
				return '2.25';
			}
			else if ($marks<45 && $marks>=40) {
				return '2.00';
			}
			else if ($marks<40) {
				return '0.00';
			}
        } 
        // total Cgpa............
        function grade_average_com_2nd_seme($a,$b,$c,$d,$e,$f,$g,$h){

        	$s1 = $this->sub1 = $a*3;
			$s2 = $this->sub2 = $b*1;
			$s3 = $this->sub3 = $c*4;
			$s4 = $this->sub4 = $d*4;
			$s5 = $this->sub5 = $e*2;
			$s6 = $this->sub6 = $f*3;
			$s7 = $this->sub7 = $g*4;
			$s8 = $this->sub8 = $h*2;

			$cgp = $s1+$s2+$s3+$s4+$s5+$s6+$s7;
			
			$cgpa = $cgp/23;
			return $cgpa;

        }

// computer 2nd semester all function end here...............
//*********************************************************//
//*********************************************************//
//computer 3rd semester function start......................

        // total mark 150 .........
        function p_lang_1($a,$b,$c,$d){
        	$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			$theory = $tc+$tf;
			if ($theory<40 or $pc<10 or $pf<10) {
				return 0;
			}
			else{
				$total = $theory+$pc+$pf;
				return $total;
			}
			
        }

        // total mark 200 .........
        function digital_ele($a,$b,$c,$d){
        	$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			$theory = $tc+$tf;
			if ($theory<60 or $pc<10 or $pf<10) {
				return 0;
			}
			else{
				$total = $theory+$pc+$pf;
				return $total;
			}
			
        }

        // total mark 150 .............. 
        function industrial_ele($a,$b,$c,$d){
        	$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			$theory = $tc+$tf;
			if ($theory<40 or $pc<10 or $pf<10) {
				return 0;
			}
			else{
				$total = $theory+$pc+$pf;
				return $total;
			}
			
        }

        // total mark 100 ...........
        function social_s1($a,$b){
        	$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$theory = $tc+$tf;
			if ($theory<40) {
				return 0;
			}
			else{
				$total = $theory;
				return $total;
			}
			
        } 
        
        //grade ............
        // total mark 150 .............
        function p_lang_1_grade($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 120) {
				return 'A+';
			}
			else if ($marks<120 && $marks>=112.5) {
				return 'A';
			}
			else if ($marks<112.5 && $marks>=105) {
				return 'A-';
			}
			else if ($marks<105 && $marks>=97.5) {
				return 'B+';
			}
			else if ($marks<97.5 && $marks>=90) {
				return 'B';
			}
			else if ($marks<90 && $marks>=82.5) {
				return 'B-';
			}
			else if ($marks<82.5 && $marks>=75) {
				return 'C+';
			}
			else if ($marks<75 && $marks>=67.5) {
				return 'C';
			}
			else if ($marks<67.5 && $marks>=60) {
				return 'D';
			}
			else if ($marks<60) {
				return 'F';
			}
        }

        // total mark 200 .........
        function digital_ele_grade($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 160) {
				return 'A+';
			}
			else if ($marks<160 && $marks>=150) {
				return 'A';
			}
			else if ($marks<150 && $marks>=140) {
				return 'A-';
			}
			else if ($marks<140 && $marks>=130) {
				return 'B+';
			}
			else if ($marks<130 && $marks>=120) {
				return 'B';
			}
			else if ($marks<120 && $marks>=110) {
				return 'B-';
			}
			else if ($marks<110 && $marks>=100) {
				return 'C+';
			}
			else if ($marks<100 && $marks>=90) {
				return 'C';
			}
			else if ($marks<90 && $marks>=80) {
				return 'D';
			}
			else if ($marks<80) {
				return 'F';
			}
        }

        // total mark 150 .........
        function industrial_ele_grade($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 120) {
				return 'A+';
			}
			else if ($marks<120 && $marks>=112.5) {
				return 'A';
			}
			else if ($marks<112.5 && $marks>=105) {
				return 'A-';
			}
			else if ($marks<105 && $marks>=97.5) {
				return 'B+';
			}
			else if ($marks<97.5 && $marks>=90) {
				return 'B';
			}
			else if ($marks<90 && $marks>=82.5) {
				return 'B-';
			}
			else if ($marks<82.5 && $marks>=75) {
				return 'C+';
			}
			else if ($marks<75 && $marks>=67.5) {
				return 'C';
			}
			else if ($marks<67.5 && $marks>=60) {
				return 'D';
			}
			else if ($marks<60) {
				return 'F';
			}
        }

        // total mark 100 .........
        function social_s1_grade($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 80) {
				return 'A+';
			}
			else if ($marks<80 && $marks>=75) {
				return 'A';
			}
			else if ($marks<75 && $marks>=70) {
				return 'A-';
			}
			else if ($marks<70 && $marks>=65) {
				return 'B+';
			}
			else if ($marks<65 && $marks>=60) {
				return 'B';
			}
			else if ($marks<60 && $marks>=55) {
				return 'B-';
			}
			else if ($marks<55 && $marks>=50) {
				return 'C+';
			}
			else if ($marks<50 && $marks>=45) {
				return 'C';
			}
			else if ($marks<45 && $marks>=40) {
				return 'D';
			}
			else if ($marks<40) {
				return 'F';
			}
        }
       
        //points............
        // total mark 150 .........
        function p_lang_1_point($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 120) {
				return '4.00';
			}
			else if ($marks<120 && $marks>=112.5) {
				return '3.75';
			}
			else if ($marks<112.5 && $marks>=105) {
				return '3.50';
			}
			else if ($marks<105 && $marks>=97.5) {
				return '3.25';
			}
			else if ($marks<97.5 && $marks>=90) {
				return '3.00';
			}
			else if ($marks<90 && $marks>=82.5) {
				return '2.75';
			}
			else if ($marks<82.5 && $marks>=75) {
				return '2.50';
			}
			else if ($marks<75 && $marks>=67.5) {
				return '2.25';
			}
			else if ($marks<67.5 && $marks>=60) {
				return '2.00';
			}
			else if ($marks<60) {
				return '0.00';
			}
        }
        // total mark 200 .........
        function digital_ele_point($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 160) {
				return '4.00';
			}
			else if ($marks<160 && $marks>=150) {
				return '3.75';
			}
			else if ($marks<150 && $marks>=140) {
				return '3.50';
			}
			else if ($marks<140 && $marks>=130) {
				return '3.25';
			}
			else if ($marks<130 && $marks>=120) {
				return '3.00';
			}
			else if ($marks<120 && $marks>=110) {
				return '2.75';
			}
			else if ($marks<110 && $marks>=100) {
				return '2.50';
			}
			else if ($marks<100 && $marks>=90) {
				return '2.25';
			}
			else if ($marks<90 && $marks>=80) {
				return '2.00';
			}
			else if ($marks<80) {
				return '0.00';
			}
        }
        // total mark 150 .........
        function industrial_ele_point($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 120) {
				return '4.00';
			}
			else if ($marks<120 && $marks>=112.5) {
				return '3.75';
			}
			else if ($marks<112.5 && $marks>=105) {
				return '3.50';
			}
			else if ($marks<105 && $marks>=97.5) {
				return '3.25';
			}
			else if ($marks<97.5 && $marks>=90) {
				return '3.00';
			}
			else if ($marks<90 && $marks>=82.5) {
				return '2.75';
			}
			else if ($marks<82.5 && $marks>=75) {
				return '2.50';
			}
			else if ($marks<75 && $marks>=67.5) {
				return '2.25';
			}
			else if ($marks<67.5 && $marks>=60) {
				return '2.00';
			}
			else if ($marks<60) {
				return '0.00';
			}
        }
        // total mark 100 .........
        function social_s1_point($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 80) {
				return '4.00';
			}
			else if ($marks<80 && $marks>=75) {
				return '3.75';
			}
			else if ($marks<75 && $marks>=70) {
				return '3.50';
			}
			else if ($marks<70 && $marks>=65) {
				return '3.25';
			}
			else if ($marks<65 && $marks>=60) {
				return '3.00';
			}
			else if ($marks<60 && $marks>=55) {
				return '2.75';
			}
			else if ($marks<55 && $marks>=50) {
				return '2.50';
			}
			else if ($marks<50 && $marks>=45) {
				return '2.25';
			}
			else if ($marks<45 && $marks>=40) {
				return '2.00';
			}
			else if ($marks<40) {
				return '0.00';
			}
        }
        // total Cgpa.........
        function grade_average_com_3rd_seme($a,$b,$c,$d,$e,$f,$g){
        	$s1 = $this->sub1 = $a*3;
			$s2 = $this->sub2 = $b*2;
			$s3 = $this->sub3 = $c*4;
			$s4 = $this->sub4 = $d*3;
			$s5 = $this->sub5 = $e*4;
			$s6 = $this->sub6 = $f*4;
			$s7 = $this->sub7 = $g*2;

			$cgp = $s1+$s2+$s3+$s4+$s5+$s6+$s7;
			
			$cgpa = $cgp/22;
			return $cgpa;
        }
   
// computer 3rd semester all function end here...............
//*********************************************************//
//*********************************************************//
//food 1st semester function start......................all function is all ready exit
        
        function grade_average_food_1st_seme($a,$b,$c,$d,$e,$f,$g){
        	$s1 = $this->sub1 = $a*2;
			$s2 = $this->sub2 = $b*2;
			$s3 = $this->sub3 = $c*1;
			$s4 = $this->sub4 = $d*4;
			$s5 = $this->sub5 = $e*4;
			$s6 = $this->sub6 = $f*3;
			$s7 = $this->sub7 = $g*2;

			$cgp = $s1+$s2+$s3+$s4+$s5+$s6+$s7;
			
			$cgpa = $cgp/18;
			return $cgpa;
        }
// food 1st semester function end here...............
//*********************************************************//
//*********************************************************//
//food 2nd semester function start......................


 //obtain marks...........
        // total mark 150 ...........
        function b_stoichiometry($a,$b,$c,$d){
        	$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			$theory = $tc+$tf;
			if ($theory<40 or $pc<10 or $pf<10) {
				return 0;
			}
			else{
				$total = $theory+$pc+$pf;
				return $total;
			}
        }
        //grade ............
        // total mark 150 ...........
        function b_stoichiometry_grade($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 120) {
				return 'A+';
			}
			else if ($marks<120 && $marks>=112.5) {
				return 'A';
			}
			else if ($marks<112.5 && $marks>=105) {
				return 'A-';
			}
			else if ($marks<105 && $marks>=97.5) {
				return 'B+';
			}
			else if ($marks<97.5 && $marks>=90) {
				return 'B';
			}
			else if ($marks<90 && $marks>=82.5) {
				return 'B-';
			}
			else if ($marks<82.5 && $marks>=75) {
				return 'C+';
			}
			else if ($marks<75 && $marks>=67.5) {
				return 'C';
			}
			else if ($marks<67.5 && $marks>=60) {
				return 'D';
			}
			else if ($marks<60) {
				return 'F';
			}
        }
        //points............
        // total mark 150 ...........
        function b_stoichiometry_point($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 120) {
				return '4.00';
			}
			else if ($marks<120 && $marks>=112.5) {
				return '3.75';
			}
			else if ($marks<112.5 && $marks>=105) {
				return '3.50';
			}
			else if ($marks<105 && $marks>=97.5) {
				return '3.25';
			}
			else if ($marks<97.5 && $marks>=90) {
				return '3.00';
			}
			else if ($marks<90 && $marks>=82.5) {
				return '2.75';
			}
			else if ($marks<82.5 && $marks>=75) {
				return '2.50';
			}
			else if ($marks<75 && $marks>=67.5) {
				return '2.25';
			}
			else if ($marks<67.5 && $marks>=60) {
				return '2.00';
			}
			else if ($marks<60) {
				return '0.00';
			}
        }

       // total Cgpa  ...........
        function grade_average_food_2nd_seme( $a,$b,$c,$d,$e,$f,$g){
        	$s1 = $this->sub1 = $a*3;
			$s2 = $this->sub2 = $b*3;
			$s3 = $this->sub3 = $c*4;
			$s4 = $this->sub4 = $d*4;
			$s5 = $this->sub5 = $e*3;
			$s6 = $this->sub6 = $f*2;
			$s7 = $this->sub7 = $g*4;

			$cgp = $s1+$s2+$s3+$s4+$s5+$s6+$s7;
			
			$cgpa = $cgp/23;
			return $cgpa;
        }

// food 2nd semester function end here...............
//*********************************************************//
//*********************************************************//
//food 3rd semester function start......................

 //obtain marks...........
        // total mark 200 ...........
        function catering_menag($a,$b,$c,$d){
        	$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			$theory = $tc+$tf;
			if ($theory<40 or $pc<20 or $pf<20) {
				return 0;
			}
			else{
				$total = $theory+$pc+$pf;
				return $total;
			}
        }

         // total mark 150 ...........
        function engin_materials($a,$b,$c,$d){
        	$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			$theory = $tc+$tf;
			if ($theory<40 or $pc<10 or $pf<10) {
				return 0;
			}
			else{
				$total = $theory+$pc+$pf;
				return $total;
			}
        }
        
        //grade ............
        // total mark 200 ...........
        function catering_menag_grade($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 160) {
				return 'A+';
			}
			else if ($marks<160 && $marks>=150) {
				return 'A';
			}
			else if ($marks<150 && $marks>=140) {
				return 'A-';
			}
			else if ($marks<140 && $marks>=130) {
				return 'B+';
			}
			else if ($marks<130 && $marks>=120) {
				return 'B';
			}
			else if ($marks<120 && $marks>=110) {
				return 'B-';
			}
			else if ($marks<110 && $marks>=100) {
				return 'C+';
			}
			else if ($marks<100 && $marks>=90) {
				return 'C';
			}
			else if ($marks<90 && $marks>=80) {
				return 'D';
			}
			else if ($marks<80) {
				return 'F';
			}
        }

        // total mark 150 ...........
        function engin_materials_grade($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 120) {
				return 'A+';
			}
			else if ($marks<120 && $marks>=112.5) {
				return 'A';
			}
			else if ($marks<112.5 && $marks>=105) {
				return 'A-';
			}
			else if ($marks<105 && $marks>=97.5) {
				return 'B+';
			}
			else if ($marks<97.5 && $marks>=90) {
				return 'B';
			}
			else if ($marks<90 && $marks>=82.5) {
				return 'B-';
			}
			else if ($marks<82.5 && $marks>=75) {
				return 'C+';
			}
			else if ($marks<75 && $marks>=67.5) {
				return 'C';
			}
			else if ($marks<67.5 && $marks>=60) {
				return 'D';
			}
			else if ($marks<60) {
				return 'F';
			}
 
        }
        
        //points............
        // total mark 200 ...........
        function catering_menag_point($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 160) {
				return '4.00';
			}
			else if ($marks<160 && $marks>=150) {
				return '3.75';
			}
			else if ($marks<150 && $marks>=140) {
				return '3.50';
			}
			else if ($marks<140 && $marks>=130) {
				return '3.25';
			}
			else if ($marks<130 && $marks>=120) {
				return '3.00';
			}
			else if ($marks<120 && $marks>=110) {
				return '2.75';
			}
			else if ($marks<110 && $marks>=100) {
				return '2.50';
			}
			else if ($marks<100 && $marks>=90) {
				return '2.25';
			}
			else if ($marks<90 && $marks>=80) {
				return '2.00';
			}
			else if ($marks<80) {
				return '0.00';
			}
        }

        // total mark 150 ...........
        function engin_materials_point($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 120) {
				return '4.00';
			}
			else if ($marks<120 && $marks>=112.5) {
				return '3.75';
			}
			else if ($marks<112.5 && $marks>=105) {
				return '3.50';
			}
			else if ($marks<105 && $marks>=97.5) {
				return '3.25';
			}
			else if ($marks<97.5 && $marks>=90) {
				return '3.00';
			}
			else if ($marks<90 && $marks>=82.5) {
				return '2.75';
			}
			else if ($marks<82.5 && $marks>=75) {
				return '2.50';
			}
			else if ($marks<75 && $marks>=67.5) {
				return '2.25';
			}
			else if ($marks<67.5 && $marks>=60) {
				return '2.00';
			}
			else if ($marks<60) {
				return '0.00';
			}
        }

        // total Cgpa ...........
        function grade_average_food_3rd_seme($a,$b,$c,$d,$e,$f,$g){
        	$s1 = $this->sub1 = $a*4;
			$s2 = $this->sub2 = $b*3;
			$s3 = $this->sub3 = $c*2;
			$s4 = $this->sub4 = $d*4;
			$s5 = $this->sub5 = $e*4;
			$s6 = $this->sub6 = $f*2;
			$s7 = $this->sub7 = $g*3;

			$cgp = $s1+$s2+$s3+$s4+$s5+$s6+$s7;
			
			$cgpa = $cgp/22;
			return $cgpa;
        }

// food 3rd semester function end here...............
//*********************************************************//
//*********************************************************//
//Aidt 1st semester function start......................

        // total mark 200 .............
        function graphics($a,$b,$c,$d){
        	$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			$theory = $tc+$tf;
			if ($theory<60 or $pc<10 or $pf<10) {
				return 0;
			}
			else{
				$total = $theory+$pc+$pf;
				return $total;
			}
        }
       
        // total mark 200 .............
     	function graphics_grade($mark){
     		$marks = $this->mark = $mark;
			if ($marks >= 160) {
				return 'A+';
			}
			else if ($marks<160 && $marks>=150) {
				return 'A';
			}
			else if ($marks<150 && $marks>=140) {
				return 'A-';
			}
			else if ($marks<140 && $marks>=130) {
				return 'B+';
			}
			else if ($marks<130 && $marks>=120) {
				return 'B';
			}
			else if ($marks<120 && $marks>=110) {
				return 'B-';
			}
			else if ($marks<110 && $marks>=100) {
				return 'C+';
			}
			else if ($marks<100 && $marks>=90) {
				return 'C';
			}
			else if ($marks<90 && $marks>=80) {
				return 'D';
			}
			else if ($marks<80) {
				return 'F';
			}
     	}
       
     	// total mark 200 .............
      	function graphics_point($mark){
      		$marks = $this->mark = $mark;
			if ($marks >= 160) {
				return '4.00';
			}
			else if ($marks<160 && $marks>=150) {
				return '3.75';
			}
			else if ($marks<150 && $marks>=140) {
				return '3.50';
			}
			else if ($marks<140 && $marks>=130) {
				return '3.25';
			}
			else if ($marks<130 && $marks>=120) {
				return '3.00';
			}
			else if ($marks<120 && $marks>=110) {
				return '2.75';
			}
			else if ($marks<110 && $marks>=100) {
				return '2.50';
			}
			else if ($marks<100 && $marks>=90) {
				return '2.25';
			}
			else if ($marks<90 && $marks>=80) {
				return '2.00';
			}
			else if ($marks<80) {
				return '0.00';
			}
      	}

      	// total Cgpa ................
      	  function grade_average_aidt_1st_seme($a,$b,$c,$d,$e,$f,$g){
        	$s1 = $this->sub1 = $a*2;
			$s2 = $this->sub2 = $b*2;
			$s3 = $this->sub3 = $c*1;
			$s4 = $this->sub4 = $d*4;
			$s5 = $this->sub5 = $e*4;
			$s6 = $this->sub6 = $f*2;
			$s7 = $this->sub7 = $g*4;

			$cgp = $s1+$s2+$s3+$s4+$s5+$s6+$s7;
			
			$cgpa = $cgp/19;
			return $cgpa;
        }
// Aidt 1st  semester function end here...............
//*********************************************************//
//*********************************************************//
//Aidt 2nd semester function start......................


		function grade_average_aidt_2nd_seme($a,$b,$c,$d,$e,$f,$g){
			$s1 = $this->sub1 = $a*3;
			$s2 = $this->sub2 = $b*3;
			$s3 = $this->sub3 = $c*4;
			$s4 = $this->sub4 = $d*4;
			$s5 = $this->sub5 = $e*2;
			$s6 = $this->sub6 = $f*4;
			$s7 = $this->sub7 = $g*3;

			$cgp = $s1+$s2+$s3+$s4+$s5+$s6+$s7;
			
			$cgpa = $cgp/23;
			return $cgpa;
		}

// Aidt 2nd  semester function end here...............
//*********************************************************//
//*********************************************************//
//Aidt 3rd semester function start......................
  		
		// obtain mark...........
  		//total mark 250 ........
  		function arch_design_drawing($a,$b,$c,$d){
  			$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			$theory = $tc+$tf;
			if ($theory<60 or $pc<20 or $pf<20) {
				return 0;
			}
			else{
				$total = $theory+$pc+$pf;
				return $total;
			}
  		}
        
        // total mark 100 ..........
        function building_finish_materials($a,$b){
        	$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$theory = $tc+$tf;
			if ($theory<40) {
				return 0;
			}
			else{
				$total = $theory;
				return $total;
			}
        }
        
        //grade..........
        // total mark 250 ...........
        function arch_design_drawing_grade($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 200) {
				return 'A+';
			}
			else if ($marks<200 && $marks>=187.5) {
				return 'A';
			}
			else if ($marks<187.5 && $marks>=175) {
				return 'A-';
			}
			else if ($marks<175 && $marks>=162.5) {
				return 'B+';
			}
			else if ($marks<162.5 && $marks>=150) {
				return 'B';
			}
			else if ($marks<150 && $marks>=137.5) {
				return 'B-';
			}
			else if ($marks<137.5 && $marks>=125) {
				return 'C+';
			}
			else if ($marks<125 && $marks>=112.5) {
				return 'C';
			}
			else if ($marks<112.5 && $marks>=100) {
				return 'D';
			}
			else if ($marks<100) {
				return 'F';
			}
        }
        
        // total mark 100 ...........
        function building_finish_materials_grade($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 80) {
				return 'A+';
			}
			else if ($marks<80 && $marks>=75) {
				return 'A';
			}
			else if ($marks<75 && $marks>=70) {
				return 'A-';
			}
			else if ($marks<70 && $marks>=65) {
				return 'B+';
			}
			else if ($marks<65 && $marks>=60) {
				return 'B';
			}
			else if ($marks<60 && $marks>=55) {
				return 'B-';
			}
			else if ($marks<55 && $marks>=50) {
				return 'C+';
			}
			else if ($marks<50 && $marks>=45) {
				return 'C';
			}
			else if ($marks<45 && $marks>=40) {
				return 'D';
			}
			else if ($marks<40) {
				return 'F';
			}
        }
        
        //point................
        //total mark 250 .............
        function arch_design_drawing_point($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 200) {
				return '4.00';
			}
			else if ($marks<200 && $marks>=187.5) {
				return '3.75';
			}
			else if ($marks<187.5 && $marks>=175) {
				return '3.50';
			}
			else if ($marks<175 && $marks>=162.5) {
				return '3.25';
			}
			else if ($marks<162.5 && $marks>=150) {
				return '3.00';
			}
			else if ($marks<150 && $marks>=137.5) {
				return '2.75';
			}
			else if ($marks<137.5 && $marks>=125) {
				return '2.50';
			}
			else if ($marks<125 && $marks>=112.5) {
				return '2.25';
			}
			else if ($marks<112.5 && $marks>=100) {
				return '2.00';
			}
			else if ($marks<100) {
				return '0.00';
			}
        }

        // total mark 100 ...........
        function building_finish_materials_point($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 80) {
				return '4.00';
			}
			else if ($marks<80 && $marks>=75) {
				return '3.75';
			}
			else if ($marks<75 && $marks>=70) {
				return '3.50';
			}
			else if ($marks<70 && $marks>=65) {
				return '3.25';
			}
			else if ($marks<65 && $marks>=60) {
				return '3.00';
			}
			else if ($marks<60 && $marks>=55) {
				return '2.75';
			}
			else if ($marks<55 && $marks>=50) {
				return '2.50';
			}
			else if ($marks<50 && $marks>=45) {
				return '2.25';
			}
			else if ($marks<45 && $marks>=40) {
				return '2.00';
			}
			else if ($marks<40) {
				return '0.00';
			}
        }
        
        //total Cgpa ...............
        function grade_average_food_aidt_seme($a,$b,$c,$d,$e,$f,$g){
        	$s1 = $this->sub1 = $a*5;
			$s2 = $this->sub2 = $b*2;
			$s3 = $this->sub3 = $c*2;
			$s4 = $this->sub4 = $d*3;
			$s5 = $this->sub5 = $e*4;
			$s6 = $this->sub6 = $f*4;
			$s7 = $this->sub7 = $g*2;

			$cgp = $s1+$s2+$s3+$s4+$s5+$s6+$s7;
			
			$cgpa = $cgp/22;
			return $cgpa;
        }

// Aidt 3rd  semester function end here...............
//*********************************************************//
//*********************************************************//
//rac 1st semester function start......................
  

        //obtain mark ...........
        // total mark 200 ......
		function rac_fundamental($a,$b,$c,$d){
			$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			$theory = $tc+$tf;
			if ($theory<60 or $pc<10 or $pf<10) {
				return 0;
			}
			else{
				$total = $theory+$pc+$pf;
				return $total;
			}
		}

		//grade  ...........
        // total mark 200 ......
		function rac_fundamental_grade($mark){
			$marks = $this->mark = $mark;
			if ($marks >= 160) {
				return 'A+';
			}
			else if ($marks<160 && $marks>=150) {
				return 'A';
			}
			else if ($marks<150 && $marks>=140) {
				return 'A-';
			}
			else if ($marks<140 && $marks>=130) {
				return 'B+';
			}
			else if ($marks<130 && $marks>=120) {
				return 'B';
			}
			else if ($marks<120 && $marks>=110) {
				return 'B-';
			}
			else if ($marks<110 && $marks>=100) {
				return 'C+';
			}
			else if ($marks<100 && $marks>=90) {
				return 'C';
			}
			else if ($marks<90 && $marks>=80) {
				return 'D';
			}
			else if ($marks<80) {
				return 'F';
			}
		}

		//point  ...........
        // total mark 200 ......
        function rac_fundamental_point($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 200) {
				return '4.00';
			}
			else if ($marks<200 && $marks>=187) {
				return '3.75';
			}
			else if ($marks<187 && $marks>=175) {
				return '3.50';
			}
			else if ($marks<175 && $marks>=162) {
				return '3.25';
			}
			else if ($marks<162 && $marks>=150) {
				return '3.00';
			}
			else if ($marks<150 && $marks>=137.5) {
				return '2.75';
			}
			else if ($marks<137.5 && $marks>=125) {
				return '2.50';
			}
			else if ($marks<125 && $marks>=112.5) {
				return '2.25';
			}
			else if ($marks<112.5 && $marks>=100) {
				return '2.00';
			}
			else if ($marks<100) {
				return '0.00';
			}
        }
        
        //total Cgpa ................
        function grade_average_rac_1st_seme($a,$b,$c,$d,$e,$f,$g){
        	$s1 = $this->sub1 = $a*2;
			$s2 = $this->sub2 = $b*2;
			$s3 = $this->sub3 = $c*1;
			$s4 = $this->sub4 = $d*4;
			$s5 = $this->sub5 = $e*4;
			$s6 = $this->sub6 = $f*2;
			$s7 = $this->sub7 = $g*4;

			$cgp = $s1+$s2+$s3+$s4+$s5+$s6+$s7;
			
			$cgpa = $cgp/19;
			return $cgpa;
        }

// rac 1st  semester function end here...............
//*********************************************************//
//*********************************************************//
//rac 2nd semester function start......................
      
        
 function rac_engin_drawing($c,$d){
        	$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			if ($pc<20 or $pf<20) {
				return 0;
			}
			else{
				$total = $pc+$pf;
				return $total;
			}
        }

        //total mark 100 ..............
        function rac_engin_drawing_grade($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 80) {
				return 'A+';
			}
			else if ($marks<80 && $marks>=75) {
				return 'A';
			}
			else if ($marks<75 && $marks>=70) {
				return 'A-';
			}
			else if ($marks<70 && $marks>=65) {
				return 'B+';
			}
			else if ($marks<65 && $marks>=60) {
				return 'B';
			}
			else if ($marks<60 && $marks>=55) {
				return 'B-';
			}
			else if ($marks<55 && $marks>=50) {
				return 'C+';
			}
			else if ($marks<50 && $marks>=45) {
				return 'C';
			}
			else if ($marks<45 && $marks>=40) {
				return 'D';
			}
			else if ($marks<40) {
				return 'F';
			}
        }

        //total mark 100 ...............
        function rac_engin_drawing_point($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 80) {
				return '4.00';
			}
			else if ($marks<80 && $marks>=75) {
				return '3.75';
			}
			else if ($marks<75 && $marks>=70) {
				return '3.50';
			}
			else if ($marks<70 && $marks>=65) {
				return '3.25';
			}
			else if ($marks<65 && $marks>=60) {
				return '3.00';
			}
			else if ($marks<60 && $marks>=55) {
				return '2.75';
			}
			else if ($marks<55 && $marks>=50) {
				return '2.50';
			}
			else if ($marks<50 && $marks>=45) {
				return '2.25';
			}
			else if ($marks<45 && $marks>=40) {
				return '2.00';
			}
			else if ($marks<40) {
				return '0.00';
			}
        }

        //total Cgpa ........
        function grade_average_rac_2nd_seme($a,$b,$c,$d,$e,$f,$g){
        	$s1 = $this->sub1 = $a*3;
			$s2 = $this->sub2 = $b*3;
			$s3 = $this->sub3 = $c*4;
			$s4 = $this->sub4 = $d*4;
			$s5 = $this->sub5 = $e*2;
			$s6 = $this->sub6 = $f*4;
			$s7 = $this->sub7 = $g*2;

			$cgp = $s1+$s2+$s3+$s4+$s5+$s6+$s7;
			
			$cgpa = $cgp/22;
			return $cgpa;
        }






// rac 2nd  semester function end here...............
//*********************************************************//
//*********************************************************//
//rac 3rd semester function start......................

 //total mark 200 ........
        function rac_cycles($a,$b,$c,$d){
        	$tc = $this->tc = $a;
			$tf = $this->tf = $b;
			$pc = $this->pc = $c;
			$pf = $this->pf = $d;
			$theory = $tc+$tf;
			if ($theory<60 or $pc<10 or $pf<10) {
				return 0;
			}
			else{
				$total = $theory+$pc+$pf;
				return $total;
			}
        }
       //total mark 200 ........
        function rac_cycles_grade($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 160) {
				return 'A+';
			}
			else if ($marks<160 && $marks>=150) {
				return 'A';
			}
			else if ($marks<150 && $marks>=140) {
				return 'A-';
			}
			else if ($marks<140 && $marks>=130) {
				return 'B+';
			}
			else if ($marks<130 && $marks>=120) {
				return 'B';
			}
			else if ($marks<120 && $marks>=110) {
				return 'B-';
			}
			else if ($marks<110 && $marks>=100) {
				return 'C+';
			}
			else if ($marks<100 && $marks>=90) {
				return 'C';
			}
			else if ($marks<90 && $marks>=80) {
				return 'D';
			}
			else if ($marks<80) {
				return 'F';
			}
        }
        //total mark 200 .........
        function rac_cycles_point($mark){
        	$marks = $this->mark = $mark;
			if ($marks >= 160) {
				return '4.00';
			}
			else if ($marks<160 && $marks>=150) {
				return '3.75';
			}
			else if ($marks<150 && $marks>=140) {
				return '3.50';
			}
			else if ($marks<140 && $marks>=130) {
				return '3.25';
			}
			else if ($marks<130 && $marks>=120) {
				return '3.00';
			}
			else if ($marks<120 && $marks>=110) {
				return '2.75';
			}
			else if ($marks<110 && $marks>=100) {
				return '2.50';
			}
			else if ($marks<100 && $marks>=90) {
				return '2.25';
			}
			else if ($marks<90 && $marks>=80) {
				return '2.00';
			}
			else if ($marks<80) {
				return '0.00';
			}
        }
        

        function grade_average_rac_3rd_seme($a,$b,$c,$d,$e,$f,$g){
        		
        	$s1 = $this->sub1 = $a*4;
			$s2 = $this->sub2 = $b*3;
			$s3 = $this->sub3 = $c*2;
			$s4 = $this->sub4 = $d*4;
			$s5 = $this->sub5 = $e*4;
			$s6 = $this->sub6 = $f*2;
			$s7 = $this->sub7 = $g*3;

			$cgp = $s1+$s2+$s3+$s4+$s5+$s6+$s7;
			
			$cgpa = $cgp/22;
			return $cgpa;
        }

// rac 3rd  semester function end here...............
//*********************************************************//
//*********************************************************//


	}


?>