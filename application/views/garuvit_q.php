<?php
/*
Given two numbers N1 and N2, a digit in N1 or N2 is a minimum if it is lesser than
both the digits adjacent to it. 
Similarly, a digit is a maximum if it is greater than both the digits adjacent to it. 
The Slope is the number of digits (leaving out the first and the last digit) 
which are either a minimum or a maximum in a number N1 or N2. 
Find the sum of slopes between N1 and N2.

Input :
First line contains two numbers N1 and N2.
Output :
Sum of Slopes beetween N1 and N2.

Sample Input :
100 150
Sample Output :
19

*/

ini_set('display_errors', '1');

//inputs...
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d", $arg1);
fscanf($handle,"%d", $arg2);

function slope($arg1, $arg2) 
{
	//start code here...	
	
	
}

echo slope($arg1, $arg2);



=================================================================
/*
Given an array of integers, find and print the maximum number of integers 
you can select from the array such that the absolute difference between any two
of the chosen integers is <=1 

Input Format

The first line contains a single integer ,arg1, denoting the size of the array.
The second line contains space-separated integers describing the respective
values of array ,arg2.

Output Format

A single integer denoting the maximum number of integers you can choose 
from the array such that the absolute difference between any two
of the chosen integers is <=1

Sample Input 1

6
1 2 2 3 1 2

Sample Output 1

5

Explanation 1

We choose the following multiset of integers from the array: (1, 2, 2, 1, 2).
Each pair in the multiset has an absolute difference <=1, 
so we print the number of chosen integers,5, as our answer.

*/

ini_set('display_errors', '1');

//inputs...
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d", $arg1);
$arg2 = array();

for ($i = 0; $i < $arg1; $i++) {
	fscanf($handle,"%d", $arg2[$i]);
}

function operations($arg2) 
{
	//start code here...	
	
}



echo operations($arg2);


======================================================================================
/*
Making Candies
John loves playing games. His current favorite is CandyMaker, 
where the goal is to make candies.

John just started a level in which he must make (n) candies using (m) machines and (w) workers. 
In a single pass, he can make (m*w) candies, after each pass, he can decide whether to
spend some of his candies to buy more machines or hire more workers.
Buying a machine or hiring a worker costs (p) units of candies, and there is no limit to
the number of machines he can build or workers he can hire.

John wants to maximize his score by making all candies in a minimum number of passes.
Can you find and print the minimum number of passes required for John to make at least
units of candies?

Input Format:
Input consists of four integers describing the respective values of (m), (w), (p), and (n).

Output Format:
Print the minimum number of passes required to make at least (n) candies.

Sample Input:
3
1
2
12
Sample Output:
3
*/

ini_set('display_errors', '1');

//inputs...
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d", $m);
fscanf($handle,"%d", $w);
fscanf($handle,"%d", $p);
fscanf($handle,"%d", $n);

function max_passes($m, $w, $p, $n) 
{
	
	$more = $passes = 0 ;
	do{
		$can = $m*$w;
		$passes ++;
		$more = (int)(($m*$w)/$p);
		$m = $m+$more;
		$w = $w+$more; 
	
	}while($can < $n);	
	
	return $passes;
	
}

echo max_passes($m, $w, $p, $n);
























=================================================================================






/*
John's clothing store has a pile of N loose socks where each sock i is labeled with an integer,
Ci , denoting its color. He wants to sell as many socks as possible, 
but his customers will only buy them in matching pairs. 
Two socks,i and j, are a single matching pair if Ci = Cj.

Given and the color of each sock, how many pairs of socks can John sell?

Input Format
The first Argument contains an integer, $arg1 , denoting the number of socks.
The second Argument contains array of integers , $agr2 ,describing the respective values of C0,C1,C2,C3....Cn-1.

Output Format
Print the total number of matching pairs of socks that John can sell.

Sample Input
9
10 20 20 10 10 30 50 10 20

Sample Output
3
*/
ini_set('display_errors', '1');

//inputs...
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d", $arg1);
$arg2 = array();
for ($i = 0; $i < $arg1; $i++) {
	fscanf($handle,"%d", $arg2[$i]);
}


function number_of_socks($arg1, $arg2){
	$count_array = array();
	foreach($arg2 as $k=>$val){
		if(isset($count_array[$val])){
			$count_array[$val] = $count_array[$val] +1;
		}else{
			$count_array[$val] = 1;
		}
	}
	
	
	$no_sell = 0;
	foreach($count_array as $k => $val){
		if($val > 1 ){
			$no_sell = $no_sell + (int)($val/2);
		}
	}
	
	return 	$no_sell;
}


echo number_of_socks($arg1, $arg2);






















============================================

/* 
John have an array of N integer numbers. He need to convert the array in such a way that 
the next element is always less than or equal to the current element or current element is 
the last element of array, in minimum number of steps.
Formally, if a is an array and ai is ith element of array then he need convert the array such that ai+1 <= ai for 1 <= i <= N-1 in minimum no. of steps.
At each step he is allowed to change the value of any number into its next integer or to the previous integer.
Write a function min_steps() to print minimum number of steps required to convert the array.

Input:
First Argument contains an integer N, the length of the sequence.
Second Argument contains an array 'a' capacities of each bottles.

Output:
print the minimum number of steps required to achieve the goal.

SAMPLE INPUT 
N: 4, a: [3, 1, 2, 1]

SAMPLE OUTPUT 
1

Explanation
We can convert the array into 3 1 1 1 by changing 3rd element of array i.e. 2 into its previous integer 1 
in one step hence only one step is required.
*/

ini_set('display_errors', '1');

//inputs...
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d", $N);
$a = array();
for ($i = 0; $i < $N; $i++) {
	fscanf($handle,"%d", $a[$i]);
}


function min_steps($N, $a)
{
	$step =0;
    foreach($a as $k=> $val){
    	//echo $k.'===='; 
    	if($k < $N-1){
    		if($val < $a[$k+1] ){
    			$a[$k+1] = $val;
    			$step++;
    		}
    	}else{
    		break;
    	}
    	
    }
    return $step;
    
    //exit;

}


echo min_steps($N, $a);
==================================================================

?>