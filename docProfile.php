
	<form method="POST" action="doctorForm.php" name="userData">



<h5>ID/PIN Setup </h5>
<p>****************************************************************************</p>
<br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">AHIS ID</label>
      <input type="text" class="form-control" id="ahisId" placeholder="AHIS ID" disabled value="" name="ahisId">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Enter Your 4 Digit PIN</label>
      <input type="password" class="form-control" id="pin" placeholder="PIN" name="pin" required>
        <br> 
      <br>
    </div>

  </div>



  <h5>Personal Info</h5>

  <p>****************************************************************************</p>

  <div class="form-row">

  
    <div class="form-group col-md-6">
    <label>First Name</label>
    <input type="text" name="fName" id="pFName" class="form-control" placeholder="First Name" required>
    </div>


    <div class="form-group col-md-6">
    <label>Last Name</label>
    <input type="text" name="lName" id="pLName" class="form-control" placeholder="Last Name" required>
    </div>


    <div class="form-group col-md-6">
    <label>License Number</label>
    <input type="text" name="lNumber" id="lNumber" class="form-control" placeholder="Gov. License#" required>
    </div>


      <div class="form-group col-md-6">
    <label>Tazkerah (ID) Number</label>
    <input type="text" name="tazkerah" id="tazkerah" class="form-control" placeholder="0123456789">

    </div>

       <div class="form-group col-md-6">
    <label>Nationality</label>
    <input type="text" name="nationality" id="nationality" class="form-control" placeholder="Afghan, Indian..." required>
    </div>


         <div class="form-group col-md-6">
    <label>Language 1</label>
    <input type="text" name="lang1" id="lang1" class="form-control" placeholder="Pashtu, Dari, English..." required>
    </div>

            <div class="form-group col-md-6">
    <label>Language 2</label>
    <input type="text" name="lang2" id="lang2" class="form-control" placeholder="Dari, Pashtu, English...">
    </div>

            <div class="form-group col-md-6">
    <label>Language 3</label>
    <input type="text" name="lang3" id="lang3" class="form-control" placeholder="Pashtu, Dari, Urdu..">
    </div>
    



       <div class="form-group col-md-6">
    <label>Age</label>
    <input type="Number" name="age" id="lNumber" class="form-control" placeholder="30, 40..." required>
    </div>


       <div class="form-group col-md-4">
        <label for="Sex">Sex</label>
        <select id="sex" class="form-control" name="sex">
        <option selected>Choose...</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>


      </select>
    </div>

    </div>

    <br>


     <h5>Speciality/Education</h5>

  <p>****************************************************************************</p>

<br>
    <div class="form-row">




       <div class="form-group col-md-4">
        <label for="General Surgeon">Speciality 1</label>
        <select id="sex" class="form-control" name="speciality1">
        <option selected>Choose...</option>
        <option value="Urologist">Urologist</option>
        <option value="General Surgeon">General Surgeon</option>
         <option value="Sport Medicine Specialist">Sport Medicine Specialist</option>
        <option value="Medicine Specialist">Medicine Specialist</option>
         <option value="Reheumatologist">Reheumatologist</option>
        <option value="Radiologist">Radiologist</option>
         <option value="Pulmonologist">Pulmonologist</option>
        <option value="Psychiatrist">Psychiatrist</option>
         <option value="Podiatrists">Podiatrists</option>
        <option value="Plastic Surgeon">Plastic Surgeon</option>
         <option value="Physiatrist">Physiatrist</option>
        <option value="Pediatrician">Pediatrician</option>
         <option value="Pathologist">Pathologist</option>
          <option value="Pathologist">Pathologist</option>
           <option value="Otolaryngologist">Otolaryngologist</option>
            <option value="Osteopath">Osteopath</option>
            <option value="Ophthalmologist">Ophthalmologist</option>
            <option value="Oncologist">Oncologist</option>
            <option value="Obstetrician/Genecologist">Obstetrician/Genecologist</option>
            <option value="Neurologist">Neurologist</option>
            <option value="Nephrologist">Nephrologist</option>
            <option value="Medical Geneticist">Medical Geneticist</option>
            <option value="Internist">Internist</option>
            <option value="Infectiouse Disease Specialist">Infectiouse Disease Specialist</option>

            <option value="Hematologist">Hematologist</option>
            <option value="Family Physicians">Family Physicians</option>
            <option value="Dematologist">Dematologist</option>
            <option value="FCardiologist">Cardiologist</option>
            <option value="Allergist">Allergist</option>


      </select>
    </div>


       <div class="form-group col-md-4">
        <label for="General Surgeon">Speciality 2</label>
        <select id="sex" class="form-control" name="speciality2">
        <option selected>Choose...</option>
        <option value="Urologist">Urologist</option>
        <option value="General Surgeon">General Surgeon</option>
         <option value="Sport Medicine Specialist">Sport Medicine Specialist</option>
        <option value="Medicine Specialist">Medicine Specialist</option>
         <option value="Reheumatologist">Reheumatologist</option>
        <option value="Radiologist">Radiologist</option>
         <option value="Pulmonologist">Pulmonologist</option>
        <option value="Psychiatrist">Psychiatrist</option>
         <option value="Podiatrists">Podiatrists</option>
        <option value="Plastic Surgeon">Plastic Surgeon</option>
         <option value="Physiatrist">Physiatrist</option>
        <option value="Pediatrician">Pediatrician</option>
         <option value="Pathologist">Pathologist</option>
          <option value="Pathologist">Pathologist</option>
           <option value="Otolaryngologist">Otolaryngologist</option>
            <option value="Osteopath">Osteopath</option>
            <option value="Ophthalmologist">Ophthalmologist</option>
            <option value="Oncologist">Oncologist</option>
            <option value="Obstetrician/Genecologist">Obstetrician/Genecologist</option>
            <option value="Neurologist">Neurologist</option>
            <option value="Nephrologist">Nephrologist</option>
            <option value="Medical Geneticist">Medical Geneticist</option>
            <option value="Internist">Internist</option>
            <option value="Infectiouse Disease Specialist">Infectiouse Disease Specialist</option>

            <option value="Hematologist">Hematologist</option>
            <option value="Family Physicians">Family Physicians</option>
            <option value="Dematologist">Dematologist</option>
            <option value="FCardiologist">Cardiologist</option>
            <option value="Allergist">Allergist</option>


      </select>
    </div>



       <div class="form-group col-md-4">
        <label for="General Surgeon">Speciality 3</label>
        <select id="sex" class="form-control" name="speciality3">
        <option selected>Choose...</option>
        <option value="Urologist">Urologist</option>
        <option value="General Surgeon">General Surgeon</option>
         <option value="Sport Medicine Specialist">Sport Medicine Specialist</option>
        <option value="Medicine Specialist">Medicine Specialist</option>
         <option value="Reheumatologist">Reheumatologist</option>
        <option value="Radiologist">Radiologist</option>
         <option value="Pulmonologist">Pulmonologist</option>
        <option value="Psychiatrist">Psychiatrist</option>
         <option value="Podiatrists">Podiatrists</option>
        <option value="Plastic Surgeon">Plastic Surgeon</option>
         <option value="Physiatrist">Physiatrist</option>
        <option value="Pediatrician">Pediatrician</option>
         <option value="Pathologist">Pathologist</option>
          <option value="Pathologist">Pathologist</option>
           <option value="Otolaryngologist">Otolaryngologist</option>
            <option value="Osteopath">Osteopath</option>
            <option value="Ophthalmologist">Ophthalmologist</option>
            <option value="Oncologist">Oncologist</option>
            <option value="Obstetrician/Genecologist">Obstetrician/Genecologist</option>
            <option value="Neurologist">Neurologist</option>
            <option value="Nephrologist">Nephrologist</option>
            <option value="Medical Geneticist">Medical Geneticist</option>
            <option value="Internist">Internist</option>
            <option value="Infectiouse Disease Specialist">Infectiouse Disease Specialist</option>

            <option value="Hematologist">Hematologist</option>
            <option value="Family Physicians">Family Physicians</option>
            <option value="Dematologist">Dematologist</option>
            <option value="FCardiologist">Cardiologist</option>
            <option value="Allergist">Allergist</option>


      </select>
    </div>


     <div class="form-group col-md-6">
    <label>Education</label>
    <input type="text" name="education" id="occupation" class="form-control" placeholder="i.e Asso., Bachelor, PHD...">

    </div>


</div>
<br>



  <h5>Office Address/Contact Info</h5>

  <p>****************************************************************************</p>
<br>


 <div class="form-row">



    <div class="form-group col-md-6">
    <label>Office Name/#</label>
    <input type="text" name="officeName" id="telephone" class="form-control" placeholder="House # / Name" required>
  	</div>



    <div class="form-group col-md-6">
    <label>Street</label>
    <input type="text" name="street" id="street" class="form-control" placeholder="i.e Darb Malik,..." required>
    </div>


    <div class="form-group col-md-6">
    <label>City</label>
    <input type="text" name="city" id="city" class="form-control" placeholder="i.e Herat, Kabul, ..." required>
    </div>


     <div class="form-group col-md-6">
    <label>District</label>
    <input type="text" name="district" id="district" class="form-control" placeholder="9, 8, or enjil,..." required>
    </div>



    <div class="form-group col-md-6">
    <label>Village</label>
    <input type="text" name="village" id="district" class="form-control" placeholder="i.e Ganj, Shiwan,...">
    </div>


    <div class="form-group col-md-6">
    <label>Country</label>
    <input type="text" name="country" id="city" class="form-control" placeholder="i.e Afghanistan..." required>
    </div>



    <div class="form-group col-md-6">
    <label>Telephone Number</label>
    <input type="Telephone" name="telephone" id="telephone" class="form-control" placeholder="040-222333">
    </div>


    <div class="form-group col-md-6">
    <label>Cell Phone</label>
    <input type="Telephone" name="cellPhone" id="cellPhone" class="form-control" placeholder="797009001">
    </div>


    <div class="form-group col-md-6">
    <label>Email</label>
    <input type="Email" name="email" id="email" class="form-control" placeholder="email">
	</div>


 	<div class="form-group col-md-6">
    <label>Website</label>
    <input type="text" name="website" id="website" class="form-control" placeholder="www.xyz.com">
    </div>




 </div>



 <br>

  <h5>Emergency Contact Info</h5>

  <p>****************************************************************************</p>


  <div class="form-row">


    
      <div class="form-group col-md-6">
      <label>Telephone</label>
      <input type="Telephone" name="emTelephone" id="emTelephone" class="form-control" placeholder="EM. Contact#1" required>
 		 </div>



      <div class="form-group col-md-6">
      <label>Cell Phone</label>
      <input type="Telephone" name="emCellPhone" id="emCellPhone" class="form-control" placeholder="EM. Contact#2">
      <br>
   
      </div>


  </div>



  <div class="form-row">
      
      
      <button type="submit" class="btn btn-primary" name="submit">Register</button>
      <button type="reset" class="btn btn-danger" name="reset">Reset Form</button>



  </div>


      <br>
     

</form>
