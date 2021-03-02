<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
</head>
<body>
	<h1>Register Page</h1>

	<form method="post" action="/registration">
        {{-- @csrf --}}
       {{--  {{csrf_field()}} --}}
        <input type="hidden" name="_token" value="{{csrf_token()}}" >

		<fieldset>
        <legend><b>REGISTRATION</b></legend>
        
            <br/>
            <table width="100%"  >
                



           <b>First Name</b><br>
            <input type="text" name="Fname" value=""><br>

            <b>Last Name</b><br>
            <input type="text" name="Lname" value=""><br>

            <b>Dob</b><br>
            <input type="date" name="dob"  > <br>
            
            <b>Gender</b><br>
            <input type="radio" name="gender" value="Male" > Male 
            <input type="radio" name="gender" value="Female" > Female
            <input type="radio" name="gender" value="Other" > Other <br>

            <b>Adress</b><br>
            <input type="text" name="adress" value=""><br>

            <b>Company Name</b><br>
            <input type="text" name="company name" value=""><br>

            <b>Country</b><br>
            <input type="text" name="country" value=""><br>
           
            <b>Phone Number</b><br>
            <input type="Number" name="phoneNumber" value=""><br>

            <b>Email Adress</b><br>
            <input type="email" name="email"  > 
            <button title="hint:sample@example.com" style= "color:blue;"> <b>i</b></button> <br>

            <b>User Name</b><br>
                
            <input name="userName" type="text"><br>
 
            <b>Password</b><br>
            <input type="password" name=" password" value="" ><br>
             
            <b>Confirm Password</b><br>
            <input type="password" name=" conPassword" value=""><br>
             
          
           
             <b>User Type </b> <br>

            <select name='type'>
                        <option> </option>
                        <option value="customer">Customer</option>
                        <option value="accoutant">Accounant</option>
                        <option value="Sales&marketing">Sales & Marketing person</option>
                    </select>
                    
                    

            

             
                <br> 
            <hr>
            
        
            </table>
            
            <input type="submit" name= "submit" value="Submit" style="color: green;">
            <input type="reset">
        </form>
    </fieldset>
	</form>

    {{session('msg')}}

</body>
</html>
