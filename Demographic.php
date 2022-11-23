<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enclosure</title>
    <?php include_once "./templates/estilos.php"?>
    <style>
        p{
            margin-bottom:0.1em;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div style="display:flex;">
            <?php  include_once "./templates/side-nav.php"?>

            <div class="grid" style="float:right; width:85%;background-color:transparent;position:absolute;top: 0;bottom: 0;right: 0;overflow-y: auto;">
                <?php include_once "./templates/content-header.php"?>
            
                <div class="g-col-6 form-container">                                
                    <div class="row sub-title">
                        <div class="col-5">
                            <label for=""  style="font-size:20px;">ENCLOSURE STUDY</label>
                        </div>
                        <div class="col-5">
                            <label for="crf_name"  style="font-size:20px;">CRF Name:</label>
                            <label for=""  style="font-size:20px;">Demographic</label>
                        </div>
                    </div>
                    <hr>
                    <form action="" method=POST>
                        <?php include_once "./templates/pacient_data_pac.php"?>
                        <!-- <div class="row">
                            <div class="col-2">
                                <label for="patient_id">Patient ID</label>
                            </div>
                            <div class="col-2">
                                <input type="text" id="patient_id" name="patient_id" style="border:0; border-bottom: thin solid silver;" placeholder="Patient ID">
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-2">
                                <label for="visit_date">Visit date</label>
                            </div>
                            <div class="col-2">
                                <input type="date" id="visit_date" name="visit_date" style="border:0; border-bottom: thin solid silver;" placeholder="Visit date">
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="section-title">A. DEMOGRAPHIC</label>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-2">
                                <label for="date_of_birth">Date of birth</label>
                            </div>
                            <div class="col-2">
                                <input type="date" id="date_of_birth" name="visdate_of_birth" style="border:0; border-bottom: thin solid silver;" placeholder="Date of birth">
                            </div>
                            <div class="col-1">
                                <label for="" style="font-weight:bold;">OR</label> 
                            </div>
                            <div class="col-2">
                                <label for="age_at_consent">Age at consent</label>
                            </div>
                            <div class="col-1">
                                <input type="number" min=0 max=100 id="age_at_consent" name="age_at_consent" style="border:0; border-bottom: thin solid silver;" placeholder="Age at consent">
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-2">
                                <label for="sex_of_birth">Sex of birth</label>
                            </div>
                            <div class="col-2">
                                <label for="sex_of_birth_0" style="margin-right:10px;">
                                    <input type="radio" id="sex_of_birth_0" name="sex_of_birth">
                                    male
                                </label>
                                <label  for="sex_of_birth_1" style="margin-right:10px;">
                                    <input type="radio" id="sex_of_birth_1" name="sex_of_birth">
                                    female
                                </label>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="section-title">B. RISK FACTORS</label>
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th>Medical condition</th>
                                            <th>Yes</th>
                                            <th>No</th>
                                            <th>UNK</th>
                                            <th>Additional information <h6>If condition has any particular subtype, please indicate the number of briefly describe.</h6></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Cigarret smoking</td>
                                            <td><input type="radio" name="cigarret_s" id="cigarret_s_1" value="1"></td>
                                            <td><input type="radio" name="cigarret_s" id="cigarret_s_0" value="0"></td>
                                            <td><input type="radio" name="cigarret_s" id="cigarret_s_2" value="2"></td>
                                            <td><input type="text" class="form-control" name="cigarret_s_obs"></td>
                                        </tr>
                                        <tr>
                                            <td>Hypertension</td>
                                            <td><input type="radio" name="hypertension" id="hypertension_1" value="1"></td>
                                            <td><input type="radio" name="hypertension" id="hypertension_0" value="0"></td>
                                            <td><input type="radio" name="hypertension" id="hypertension_2" value="2"></td>
                                            <td><input type="text" class="form-control" name="hypertension_obs"></td>
                                        </tr>
                                        <tr>
                                            <td>Hyperlipidemia</td>
                                            <td><input type="radio" name="hyperlipidemia" id="hyperlipidemia_1" value="1"></td>
                                            <td><input type="radio" name="hyperlipidemia" id="hyperlipidemia_0" value="0"></td>
                                            <td><input type="radio" name="hyperlipidemia" id="hyperlipidemia_2" value="2"></td>
                                            <td><input type="text" class="form-control" name="hyperlipidemia_obs"></td>
                                        </tr>
                                        <tr>
                                            <td>Diabetes</td>
                                            <td><input type="radio" name="diabetes" id="diabetes_1" value="1"></td>
                                            <td><input type="radio" name="diabetes" id="diabetes_0" value="0"></td>
                                            <td><input type="radio" name="diabetes" id="diabetes_2" value="2"></td>
                                            <td><input type="text" class="form-control" name="diabetes_obs"></td>
                                        </tr>
                                        <tr>
                                            <td>History of traumatic brain injury (TBI)</td>
                                            <td><input type="radio" name="tbi" id="tbi_1" value="1"></td>
                                            <td><input type="radio" name="tbi" id="tbi_0" value="0"></td>
                                            <td><input type="radio" name="tbi" id="tbi_2" value="2"></td>
                                            <td><input type="text" class="form-control" name="tbi_obs"></td>
                                        </tr>
                                        <tr>
                                            <td>Epilepsy</td>
                                            <td><input type="radio" name="epilepsy" id="epilepsy_1" value="1"></td>
                                            <td><input type="radio" name="epilepsy" id="epilepsy_0" value="0"></td>
                                            <td><input type="radio" name="epilepsy" id="epilepsy_2" value="2"></td>
                                            <td><input type="text" class="form-control" name="epilepsy_obs"></td>
                                        </tr>
                                        <tr>
                                            <td>Hydrocephalus with shunt</td>
                                            <td><input type="radio" name="hydrocephalus" id="hydrocephalus_1" value="1"></td>
                                            <td><input type="radio" name="hydrocephalus" id="hydrocephalus_0" value="0"></td>
                                            <td><input type="radio" name="hydrocephalus" id="hydrocephalus_2" value="2"></td>
                                            <td><input type="text" class="form-control" name="hydrocephalus_obs"></td>
                                        </tr>
                                        <tr>
                                            <td>Hematological disease:
                                                <h6  style="font-size:0.9rem;">
                                                <p>1=Anemia</p>
                                                <p>4=Coagulopathy</p>
                                                <p>2=Mielodysplastic síndrome</p>
                                                <p>5=Hemoglobinopathy</p>
                                                <p>3=Myeloproliferative disorder 6=Other</p>
                                                </h6>
                                            </td>
                                            <td><input type="radio" name="hematological" id="hematological_1" value="1"></td>
                                            <td><input type="radio" name="hematological" id="hematological_0" value="0"></td>
                                            <td><input type="radio" name="hematological" id="hematological_2" value="2"></td>
                                            <td><input type="text" class="form-control" name="hematological_obs"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                            Thrombocytopenia
                                            <h6>
                                            <p>1=Platelet count 100.000 to 150.000 per µL</p>
                                            <p>2=Platelet count 50.000 to 99.999 per µL</p>
                                            <p>3=Platelet count &lt; 50.000 per µL</p>
                                            </h6>
                                        </td>
                                        <td><input type="radio" name="thrombocytopenia" name="thrombocytopenia_1" value="1"></td>
                                        <td><input type="radio" name="thrombocytopenia" name="thrombocytopenia_0" value="0"></td>
                                        <td><input type="radio" name="thrombocytopenia" name="thrombocytopenia_2" value="2"></td>
                                        <td><input type="text" class="form-control" name="thrombocytopenia_obs"></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="section-title">C. MEDICATION</label>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="section-title">ANTIPLATELET THERAPY</label>
                            </div>
                        </div>  
                        <div class="row">
                            <div style="display: flex">
                                <div style="width:30%">1. Patient is under antiplatelet therapy?</div>
                                <div style="width:20%"><label for=""><input type="radio" name="ap_therapy" id="ap_therapy_1" value="1">  Yes</label></div>
                                <div style="width:20%"><label for=""><input type="radio" name="ap_therapy" id="ap_therapy_0" value="0">  No</label></div>
                            </div>
                            <div style="display: flex">
                                <div style="width:30%">2. If patient is under antiplatelet therapy, please indicate</div>
                                <div style="width:20%"><label for=""><input type="radio" name="ap_therapy" id="if_ap_therapy_1" value="1">  Single antiplatelet therapy [SAPT]</label></div>
                                <div style="width:20%"><label for=""><label for=""><input type="radio" name="ap_therapy" id="if_ap_therapy_0" value="0">  Dual antiplatelet therapy [DAPT]</label></div>
                            </div>
                        </div>   
                        <br>
                        <div class="row">
                            <label for="">Please indicate the medication (<span class="parenthesis_text">Circle one or two</span>)</label>
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th>NSAIDs</th>
                                        <th>P2Y12</th>
                                        <th>Inhibitor</th>
                                        <th>GPIIb/IIIa inhibitor PDE III inhibitor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Aspirin</td>
                                        <td>Clopidogrel</td>
                                        <td>Abciximab</td>
                                        <td>Cilostazol</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Ticagrelor</td>
                                        <td>Eptifibatide</td>
                                        <td></td>                                        
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Prasugrel</td>
                                        <td>Tirofiban</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Other</td>
                                        <td>Other</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> 
                        <div class="row">
                            <label for="">3. If patient is under antiplatelet therapy, please indicate cause (<span class="parenthesis_text">Circle one or more</span>)</label>
                            <label for="p_antiplalet_t_0"><input type="checkbox" name="p_antiplalet_t" id="p_antiplalet_t_0"> Cardiovascular protector</label>
                            <label for="p_antiplalet_t_1"><input type="checkbox" name="p_antiplalet_t" id="p_antiplalet_t_1"> Coronary artery disease</label>
                            <label for="p_antiplalet_t_2"><input type="checkbox" name="p_antiplalet_t" id="p_antiplalet_t_2"> Neurological ischemic disease</label>
                            <label for="p_antiplalet_t_3"><input type="checkbox" name="p_antiplalet_t" id="p_antiplalet_t_3"> Atrial fibrilation</label>
                            <label for="p_antiplalet_t_4"><input type="checkbox" name="p_antiplalet_t" id="p_antiplalet_t_4"> Peripheral artery disease</label>
                            <label for="p_antiplalet_t_5"><input type="checkbox" name="p_antiplalet_t" id="p_antiplalet_t_5"> Prevention of stent thrombosis
(intracraneal or extracraneal)</label>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="section-title">ANTICOAGULANT THERAPY</label>
                            </div>
                        </div> 
                        <div class="row">
                            <div style="display: flex">
                                <div style="width:30%">1. Patient is under anticoagulant therapy?</div>
                                <div style="width:20%"><label for=""><input type="radio" name="at_therapy" id="at_therapy_1" value="1">  Yes</label></div>
                                <div style="width:20%"><label for=""><input type="radio" name="at_therapy" id="at_therapy_0" value="0">  No</label></div>
                            </div>
                        </div>   
                        <br>
                        <div class="row">
                            <label>If “yes”, please indicate medication (<span class="parenthesis_text">Circle one</span>)</laber>
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th>Oral vitamin K antagonist</th>
                                        <th>Oral direct thrombin inhibitor</th>
                                        <th>Oral factor Xa inhibitors</th>
                                        <th>Parental</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Warfarin</td>
                                        <td>Dabigatran</td>
                                        <td>Rivaroxaban</td>
                                        <td>Heparin</td>
                                    </tr>
                                    <tr>
                                        <td>Acenocumarol</td>
                                        <td></td>
                                        <td>Apixaban</td>
                                        <td></td>                                        
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Edoxaban</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>Betrixaban</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>                            
                        </div>  
                        <div class="row">
                            <label for="">2. If patient is under anticoagulant therapy, please indicate cause</label>
                            <label for="at_therapy_c_0"><input type="radio" name="at_therapy_c" id="at_therapy_c_0" value="0"> Atrial fibrillation</label>
                            <label for="at_therapy_c_1"><input type="radio" name="at_therapy_c" id="at_therapy_c_1" value="1"> Artificial heart valve</label>
                            <label for="at_therapy_c_2"><input type="radio" name="at_therapy_c" id="at_therapy_c_2" value="2"> Deep vein thrombosis and/or venous thromboembolism</label>
                            <label for="at_therapy_c_3"><input type="radio" name="at_therapy_c" id="at_therapy_c_3" value="3"> Other <input type="text" id="at_therapy_c_obs" style="border:0; border-bottom: thin solid silver;width:20%;" placeholder="Specify"></label>
                        </div>  
                        <br>                       
                        <div class="row">
                            <div class="col-3">
                                <input type="submit" class="btn btn-success" value="Save" name="save">
                            </div>
                        </div>
                    </form>
                </div>    
            </div>
        </div>
    </div>
</body>
<?php  include_once "./templates/side-nav.php"?>
<?php include_once "./templates/content-header.php"?>
</html>