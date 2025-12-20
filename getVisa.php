<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">


<head >
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="43200">

    <title>Get Visa</title>
     <link rel="stylesheet" href="css/nav.css" >
    <link rel="stylesheet" href="css/getVisa.css">
</head>
<body>
  <?php
  include "navbar.php";
?>

<main class="centered-container"> 
        <div class="visa-form-box">
            <h2>GET VISA</h2>
            <form id="visaForm" action="index.php" method="get">
                
               <label for="visaNationality" style="text-align: left;"> Nationality:</label>
                <select id="visaNationality" name="nationality" required>
                    <option value="" disabled selected>Select your Nationality</option>
                    <option value="American">American</option>
                    <option value="Australian">Australian</option>
                    <option value="Brazilian">Brazilian</option>
                    <option value="Canadian">Canadian</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Egyptian">Egyptian</option>
                    <option value="French">French</option>
                    <option value="German">German</option>
                    <option value="Indian">Indian</option>
                    <option value="Japanese">Japanese</option>
                    <option value="Mexican">Mexican</option>
                    <option value="Saudi">Saudi</option>
                    <option value="South African">South African</option>
                    <option value="United Kingdom">United Kingdom</option>
                </select>
                
				
                <label for="visaType" style="text-align: left;"> Visa Type:</label>
                <select id="visaType" name="visa-type" required>
                    <option value="" disabled selected>Select a Visa Type </option>
                    <option value="eVisa">eVisa</option>
                    <option value="tourist-visa">Tourist Visa</option>
                    <option value="business-visa">Business Visa</option>
                </select>
           
		<div id="visaDetailsOutput" style="margin-top: 15px; padding: 10px; border: 1px dashed #ccc;">
                    Select a visa type above to see details.
                </div>
				
                <button type="submit">Apply</button>
            </form>
        </div>
    </main>


<footer>
 &copy;2025-26 / IMSIU /CCIS<sup>TM</sup>
</footer>


<script>
document.addEventListener('DOMContentLoaded', function() {
   
    var visaTypeSelect = document.getElementById('visaType');
    var nationalitySelect = document.getElementById('visaNationality');
    var detailsOutput = document.getElementById('visaDetailsOutput');
    var visaForm = document.getElementById('visaForm');

   
    var visaDetails = {
        'eVisa': ' Valid for 90 days, single entry. Application is online and takes approximately 1-3 business days.',
        'tourist-visa': ' Valid for up to 1 year, multiple entry. Allows a stay of up to 90 days per visit.',
        'business-visa': 'Requires an official invitation from a Saudi entity. Valid for specific business activities; duration varies.',
        '': 'Select a visa type above to see details.'
    };

   
    if (visaTypeSelect && detailsOutput) {
        visaTypeSelect.addEventListener('change', function() {
            var selectedValue = visaTypeSelect.value;
            detailsOutput.innerHTML = visaDetails[selectedValue] || visaDetails[''];
        });
    }


    if (visaForm && nationalitySelect && visaTypeSelect) {
        visaForm.addEventListener('submit', function(event) {
            event.preventDefault(); 
            
          
            var userNationality = nationalitySelect.options[nationalitySelect.selectedIndex].text;
            var visaType = visaTypeSelect.options[visaTypeSelect.selectedIndex].text;

           
            alert(`Dear user, you have selected ${visaType}.`);

        
             window.location.href = 'index.php'; 
        });
    }
});
</script>

</body> 

</html>
