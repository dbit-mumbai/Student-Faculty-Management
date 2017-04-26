
 function myFunction() {

 

 var x = document.forms["projdetform"]["P_name"];
    if (x.value == "") {
        alert("Project Name should not be blank !!");

        return false;
    }

	
var y = document.forms["projdetform"]["message"];

  if (y.value == "") {
                alert("Project Details should not be blank !!");
		return false;
            }

	
var z = document.forms["projdetform"]["a_date"];

  if (z.value == "") {
                alert("Date should not be blank !!");
		   
		return false;
            }

	
var a = document.forms["projdetform"]["sub_date"];

  if (a.value == "") {
                alert("Date should not be blank !!");
		   
		return false;
            }

var b = document.forms["projdetform"]["noofstud"];

           if (b.value == "") {
                alert("No of students should not be blank !!");
		   
		return false;

           if (! allnumeric(b)) {
		 alert('Please input numeric characters only');
                return false;
	}
            }


var s1 = document.forms["projdetform"]["Stud_name1"];

           if (s1.value == "") {
                alert("Student Name should not be blank !!");
		   
		return false;
            }
var s2 = document.forms["projdetform"]["Stud_name2"];

           if (s2.value == "") {
                alert("Student Name should not be blank !!");
		   
		return false;
            }
var s3 = document.forms["projdetform"]["Stud_name3"];

           if (s3.value == "") {
                alert("Student Name should not be blank !!");
		   
		return false;
            }
var s4 = document.forms["projdetform"]["Stud_name4"];

           if (s4.value == "") {
                alert("Student Name should not be blank !!");
		   
		return false;
            }
var r1 = document.forms["projdetform"]["Roll_no1"];

           if (r1.value == "") {
                alert("Student Roll No. should not be blank !!");
		   
		return false;
		if (! allnumeric(r1)) {
		 alert('Please input numeric characters only');
      return false;
	}
            }

var r2 = document.forms["projdetform"]["Roll_no2"];

           if (r2.value == "") {
                alert("Student Roll No. should not be blank !!");
		   
		return false;
		if (! allnumeric(r2)) {
		 alert('Please input numeric characters only');
      return false;
	}
            }

var r3 = document.forms["projdetform"]["Roll_no3"];

           if (r3.value == "") {
                alert("Student Roll No. should not be blank !!");
		   
		return false;
	if (! allnumeric(r3)) {
		 alert('Please input numeric characters only');
      return false;
	}
            }

var r4 = document.forms["projdetform"]["Roll_no4"];

           if (r4.value == "") {
                alert("Student Roll No. should not be blank !!");
		   
		return false;
	if (! allnumeric(r4)) {
		 alert('Please input numeric characters only');
      return false;
	}
            }

var c1 = document.forms["projdetform"]["Class_name1"];

           if (c1.value == "") {
                alert("Student Class should not be blank !!");
		   
		return false;
            }

var c2 = document.forms["projdetform"]["Class_name2"];

           if (c2.value == "") {
                alert("Student Class should not be blank !!");
		   
		return false;
            }

var c3 = document.forms["projdetform"]["Class_name3"];

           if (c3.value == "") {
                alert("Student Class should not be blank !!");
		   
		return false;
            }

var c4 = document.forms["projdetform"]["Class_name4"];

           if (c4.value == "") {
                alert("Student Class should not be blank !!");
		   
		return false;
            }

 }






            function allLetter(inputtxt)
                {
                 var letters = /^[A-Za-z]+$/;
                 if(inputtxt.value.match(letters))
                   {
              	     return true;
                   }
                 else
                   {
              	     return false;
                   }
                }


            function allnumeric(inputtxt)
               {
                  var numbers = /^[0-9]+$/;
                  if(inputtxt.value.match(numbers))
                  {
                    return true;
                  }
                  else
                  {
                    return false;
                  }
               }

  

            function limit(element,limit)
              {
                var max_chars = limit;

                  if(element.value.length > max_chars) {
                    element.value = element.value.substr(0, max_chars);
                  }
              }

			
			 
			function ValidateEmail(inputText)
			 {
				var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				if(inputText.value.match(mailformat))
					{
					
					return true;
					}
				else
					{
					return false;
					}
			}

			function deptselect(dept)
				{
					
					if(dept.value == "no")
					{
						 alert('no');
						return false;
					}
					else
					{
						 alert('yes');
						return true;
					}
				}
