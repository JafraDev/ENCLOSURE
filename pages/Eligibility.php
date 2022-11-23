<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enclosure</title>
    <?php include_once "../templates/estilos.php"?>
</head>
<body>
    
    <div class="container-fluid">
        <div style="display:flex;">
            <?php  include_once "../templates/side-nav.php"?>
            
            <div class="grid" style="float:right; width:85%;background-color:transparent;position:absolute;top: 0;bottom: 0;right: 0;overflow-y: auto;">
                <?php include_once "../templates/content-header.php"?>
                <form action="">
                    <div class="g-col-6 form-container">
                        <div class="row">
                            <div class="col-5">
                                <label for=""  style="font-size:20px;">ENCLOSURE STUDY</label>
                            </div>
                            <div class="col-5">
                                <label for="crf_name"  style="font-size:20px;">CRF Name:</label>
                                <!-- <input type="text" id="crf_name" name="crf_name" style="border:0; border-bottom: thin solid silver;" placeholder="CRF Name"> -->
                                <label>Eligibility 01</label>
                            </div>
                            <!-- <div class="col-5">
                                <label for=""  style="font-size:20px;">Eligibility 01</label>
                            </div> -->
                        </div>
                        
                        <div class="row">
                            <div class="col-3">
                                <label for="protocol_id">Protocol ID</label>
                            </div>
                            <div class="col">
                                <input type="text" id="protocol_id" name="protocol_id" style="border:0; border-bottom: thin solid silver;" placeholder="PR (AG)575/2021">
                            </div>
                        </div>  
                        <div class="row">  
                            <div class="col-3">
                                <label for="clinicalTrials_gov_id">ClinicalTrials.gov ID</label>
                            </div>
                            <div class="col">
                                <input type="text" id="clinicalTrials_gov_id" name="clinicalTrials_gov_id" style="border:0; border-bottom: thin solid silver;" placeholder="NCT05220826">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-3">
                                <label for="center">Center</label>
                            </div>
                            <div class="col">
                                <input type="text" id="center" name="center" style="border:0; border-bottom: thin solid silver;" placeholder="Center">
                            </div>
                        </div>  
                        <div class="row">  
                            <div class="col-3">
                                <label for="country">Country</label>
                            </div>
                            <div class="col">
                                <input type="text" id="country" name="country" style="border:0; border-bottom: thin solid silver;" placeholder="Country">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label for="patient_id">Patient ID</label>
                            </div>
                            <div class="col">
                                <input type="text" id="patient_id" name="patient_id" style="border:0; border-bottom: thin solid silver;" placeholder="Patient ID">
                            </div>
                        </div>  
                        <div class="row">  
                            <div class="col-3">
                                <label for="patient_number">Patient number</label>
                            </div>
                            <div class="col">
                                <input type="text" id="patient_number" name="patient_number" style="border:0; border-bottom: thin solid silver;" placeholder="Patient number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label for="date_informed">Date informed</label>
                            </div>
                            <div class="col">
                                <input type="date" id="date_informed" name="date_informed" style="border:0; border-bottom: thin solid silver;" placeholder="Date informed">
                            </div>
                        </div>  
                        <div class="row">  
                            <div class="col-3">
                                <label for="consent">Consent</label>
                            </div>
                            <div class="col">
                                <input type="text" id="consent" name="consent" style="border:0; border-bottom: thin solid silver;" placeholder="Consent">
                            </div>
                        </div>
                        <div class="row">  
                            <div class="col-3">
                                <label for="protocol_ic">Protocol IC</label>
                            </div>
                            <div class="col">
                                <input type="text" id="protocol_ic" name="protocol_ic" style="border:0; border-bottom: thin solid silver;" placeholder="Protocol ic">
                            </div>
                        </div>
                        <br>
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th colspan="3">INCLUSION CRITERIA</th>
                                </tr>
                                <tr>
                                    <th>All must be ‘Yes’ for the subject to be enrolled in the study</th>
                                    <th>YES</th>
                                    <th>NO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1. Age > 18 year-old</td>
                                    <td><input type="radio" name="ic_1" id="ic_1_1" value="1"></td>
                                    <td><input type="radio" name="ic_1" id="ic_1_0" value="0"></td>
                                </tr>
                                <tr>
                                    <td>2. Chronic or subacute subdural hematoma (cSDH) unilateral o bilateral</td>
                                    <td><input type="radio" name="ic_2" id="ic_2_1" value="1"></td>
                                    <td><input type="radio" name="ic_2" id="ic_2_0" value="0"></td>
                                </tr>
                                <tr>
                                    <td>3. Chronic subdural hematoma >  10 mm, midline shift > 5 mm or neurological symptoms attributable to mass effect</td>
                                    <td><input type="radio" name="ic_3" id="ic_3_1" value="1"></td>
                                    <td><input type="radio" name="ic_3" id="ic_3_0" value="0"></td>
                                </tr>
                                <tr>
                                    <td>4. Patient has a newly diagnosed  hematoma or a recurrence of a previous hematoma</td>
                                    <td><input type="radio" name="ic_4" id="ic_4_1" value="1"></td>
                                    <td><input type="radio" name="ic_4" id="ic_4_0" value="0"></td>
                                </tr>
                                <tr>
                                    <td>5. Patient has been operated < 72 hours ago or will be treated by surgery in the next 24 hours</td>
                                    <td><input type="radio" name="ic_5" id="ic_5_1" value="1"></td>
                                    <td><input type="radio" name="ic_5" id="ic_5_0" value="0"></td>
                                </tr>
                                <tr>
                                    <td>6. Previous modified Rankin scale < 4</td>
                                    <td><input type="radio" name="ic_6" id="ic_6_1" value="1"></td>
                                    <td><input type="radio" name="ic_6" id="ic_6_0" value="0"></td>
                                </tr>
                                <tr>
                                    <td>7. Informed consent signed by the patient or they responsible family member</td>
                                    <td><input type="radio" name="ic_7" id="ic_7_1" value="1"></td>
                                    <td><input type="radio" name="ic_7" id="ic_7_0" value="0"></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th colspan="3">EXCLUSION CRITERIA</th>
                                </tr>
                                <tr>
                                    <th>All must be ‘No’ for the subject to be enrolled in the study</th>
                                    <th>YES</th>
                                    <th>NO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1. Advanced disease with life expectancy < 6 months</td>
                                    <td><input type="radio" name="ec_1" id="ec_1_1" value="1"></td>
                                    <td><input type="radio" name="ec_1" id="ec_1_0" value="0"></td>
                                </tr>
                                <tr>
                                    <td>2. Unavailability for follow up at 6 months</td>
                                    <td><input type="radio" name="ec_2" id="ec_2_1" value="1"></td>
                                    <td><input type="radio" name="ec_2" id="ec_2_0" value="0"></td>
                                </tr>
                                <tr>
                                    <td>3. Patient expressly refuses treatment</td>
                                    <td><input type="radio" name="ec_3" id="ec_3_1" value="1"></td>
                                    <td><input type="radio" name="ec_3" id="ec_3_0" value="0"></td>
                                </tr>
                                <tr>
                                    <td>4. Condition that contraindicated endovascular procedure: Pregnancy, renal failure defined as creatinine clearence < 30 ml/min, allergy to iodinated contrast.</td>
                                    <td><input type="radio" name="ec_4" id="ec_4_1" value="1"></td>
                                    <td><input type="radio" name="ec_4" id="ec_4_0" value="0"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-3">
                                <input type="submit" class="btn btn-success" value="Save" name="save">
                            </div>
                        </div>
                    </form>
                    <?php 
                        if(isset($_POST['save'])){
                            echo "Registro guardado con éxito...";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>