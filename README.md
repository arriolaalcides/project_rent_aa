# project_rent_aa
<h3>Files</h3>
1) <b>data.php</b><br/> 
  Content data of the project:Type of rent (hour, day,week,family), amount and options (hour, day,week,family) 
  You may change the values to test the results of the rent.<br/>
2) <b>calculateInterface.php</b><br/>
    I've used this file to create a design pattern Strategy, due to different way to calculate the rent.<br/>
3) <b>alone.php</b><br/>
    Calculates the rent multiplying the price chose and its amount.<br/>
4) <b>family.php</b><br/>
    Calculates the rent multiplying the price chose, family members, its amount and its discount.<br/>
    I assumed that all family chose the same option (hour, day,week,family).<br/>
5) <b>calculate.php</b><br/>
  This file contents the class to apply strategy to the function calc(), and another functions to display the results.<br/>
6) <b>process.php</b><br/>
I test the data on this file, using the design pattern Strategy, I write the data to initialize the 'calculate' class and its function will calculate, displaying on the screen the result.
<br/><hr/><br/>
<h3>Result</h3>
  1) You must to write the vars in the file processs.php: $opt,	$amount,	$discount_family and $amount_fly.<br/>
  2) Then, in the class 'calculate', you may to write the third parameter or no.<br/>
  3) Use the file 'process.php' in the browser to watch the results.
<br/><hr/><br/>
<h3>Test</h3>
- I've created the file xml and calculateTest.php. The test has been done on Sublime Text 2 with phpUnit.<br/>
- I've used the file calculate.php, because this has a class with all functions used.<br/>
- Every function (except the getters) has two ways to test: wrong and correct.
