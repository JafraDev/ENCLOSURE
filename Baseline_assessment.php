<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enclosure</title>
    <?php include_once "./templates/estilos.php"?>
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
                            <label for=""  style="font-size:20px;">Baseline assessment</label>
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
                                <label for="" class="section-title">A. PRE-MORBID STATE</label>
                                <p class="col-6" style="padding-left:20px;text-align: justify; text-justify: inter-word;">
                                <b>Note</b>: this evaluation refers to the state prior to the current disease. If the neurological condition
                                of the patient allows it, this information can be obtained directly. If the patient has impaired
                                consciousness, this evaluation should be obtained from his family.
                                </p>
                            </div>                            
                        </div>  
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="section-title">MODIFIED RANKIN SCALE (mRS)</label>
                            </div>
                        </div>                          
                        <div class="row">
                            <label for="">How was the assessment administered?</label>
                            <label for="assessment_admin_0"><input type="radio" name="assessment_admin" id="assessment_admin_0" value="0"> In-Clinic</label>
                            <label for="assessment_admin_1"><input type="radio" name="assessment_admin" id="assessment_admin_1" value="1"> Telephone</label>
                            <label for="assessment_admin_2"><input type="radio" name="assessment_admin" id="assessment_admin_2" value="2"> Televideo</label>
                        </div>  
                        <div class="row">
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th>Grade definition</th>
                                        <th>Score (<span class="parenthesis_text">Circle one</span>)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>No symptoms at all.</td>
                                        <td><label for="grade_def_0"><input type="radio" name="grade_def" id="grade_def_0" value="0"> 0</label></td>
                                    </tr>
                                    <tr>
                                        <td>No significant disability despite symptoms; able to carry out all usual duties and activities.</td>
                                        <td><label for="grade_def_1"><input type="radio" name="grade_def"  id="grade_def_1" value="1"> 1</label></td>
                                    </tr>
                                    <tr>
                                        <td>Slight disability; unable to carry out all previous activities but able to look after own affairs
without assistance.</td>
                                        <td><label for="grade_def_2"><input type="radio" name="grade_def"  id="grade_def_2" value="2"> 2</label></td>
                                    </tr>
                                    <tr>
                                        <td>Moderate disability requiring some help, but able to walk without assistance.</td>
                                        <td><label for="grade_def_3"><input type="radio" name="grade_def"  id="grade_def_3" value="3"> 3</label></td>
                                    </tr>
                                    <tr>
                                        <td>Moderately severe disability; unable to walk without assistance and unable to attend to own
bodily needs without assistance.</td>
                                        <td><label for="grade_def_4"><input type="radio" name="grade_def"  id="grade_def_4" value="4"> 4</label> </td>
                                    </tr>
                                    <tr>
                                        <td>Severe disability; bedridden, incontinent, and requiring constant nursing care and attention.</td>
                                        <td><label for="grade_def_5"><input type="radio" name="grade_def"  id="grade_def_5" value="5"> 5</label></td>
                                    </tr>
                                    <tr>
                                        <td>Death</td>
                                        <td><label for="grade_def_6"><input type="radio" name="grade_def"  id="grade_def_6" value="6"> 6</label></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="section-title">B. CURRENT DISEASE</label>
                            </div>                            
                        </div>  
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="section-title">1. GLASGOW COMA SCORE AT ADMISSION</label>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th colspan="2"><label for="" class="section-title parenthesis_text">Glasgow coma scale</label></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="2"><b>Eye Opening Response</b></td>
                                        </tr>
                                        <tr>
                                            <td>Spontaneous--open with blinking at baseline</td>
                                            <td><label for="gs_eye_opening_4"><input type="radio" name="gs_eye_opening"  id="gs_eye_opening_4" value="4"> 4 points</label></td>
                                        </tr>
                                        <tr>
                                            <td>To verbal stimuli, command, speech</td>
                                            <td><label for="gs_eye_opening_3"><input type="radio" name="gs_eye_opening"  id="gs_eye_opening_3" value="3"> 3 points</label></td>
                                        </tr>
                                        <tr>
                                            <td>To pain only (not applied to face)</td>
                                            <td><label for="gs_eye_opening_2"><input type="radio" name="gs_eye_opening"  id="gs_eye_opening_2" value="2"> 2 points</label></td>
                                        </tr>
                                        <tr>
                                            <td>No response</td>
                                            <td><label for="gs_eye_opening_1"><input type="radio" name="gs_eye_opening"  id="gs_eye_opening_1" value="1"> 1 points</label></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <b>Verbal Response</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Oriented</td>
                                            <td><label for="gs_verbal_r_5"><input type="radio" name="gs_verbal_r"  id="gs_verbal_r_5" value="5"> 5 points</label></td>
                                        </tr>
                                        <tr>
                                            <td>Confused conversation, but able to answer questions</td>
                                            <td><label for="gs_verbal_r_4"><input type="radio" name="gs_verbal_r"  id="gs_verbal_r_4" value="4"> 4 points</label></td>
                                        </tr>
                                        <tr>
                                            <td>Inappropriate words</td>
                                            <td><label for="gs_verbal_r_3"><input type="radio" name="gs_verbal_r"  id="gs_verbal_r_3" value="3"> 3 points</label></td>
                                        </tr>
                                        <tr>
                                            <td>Incomprehensible speech</td>
                                            <td><label for="gs_verbal_r_2"><input type="radio" name="gs_verbal_r"  id="gs_verbal_r_2" value="2"> 2 points</label></td>
                                        </tr>
                                        <tr>
                                            <td>No response</td>
                                            <td><label for="gs_verbal_r_1"><input type="radio" name="gs_verbal_r"  id="gs_verbal_r_1" value="2"> 1 points</label></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <b>Motor Response</b>
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td>Obeys commands for movement</td>
                                            <td><label for="gs_motor_r_6"><input type="radio" name="gs_motor_r"  id="gs_motor_r_6" value="6"> 6 points</label></td>
                                        </tr>
                                        <tr>
                                            <td>Purposeful movement to painful stimulus</td>
                                            <td><label for="gs_motor_r_5"><input type="radio" name="gs_motor_r"  id="gs_motor_r_5" value="5"> 5 points</label></td>
                                        </tr>
                                        <tr>
                                            <td>Withdraws in response to pain</td>
                                            <td><label for="gs_motor_r_4"><input type="radio" name="gs_motor_r"  id="gs_motor_r_4" value="4"> 4 points</label></td>
                                        </tr>
                                        <tr>
                                            <td>Flexion in response to pain (decorticate posturing)</td>
                                            <td><label for="gs_motor_r_3"><input type="radio" name="gs_motor_r"  id="gs_motor_r_3" value="3"> 3 points</label></td>
                                        </tr>                                        
                                        <tr>
                                            <td>Extension in response to pain (decerebrate posturing)</td>
                                            <td><label for="gs_motor_r_2"><input type="radio" name="gs_motor_r"  id="gs_motor_r_2" value="2"> 2 points</label></td>
                                        </tr>                                        
                                        <tr>
                                            <td>No response</td>
                                            <td><label for="gs_motor_r_1"><input type="radio" name="gs_motor_r"  id="gs_motor_r_1" value="1"> 1 points</label></td>
                                        </tr>                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="text-align:right;">Total</th>
                                            <th><label id="gs_total" for="">15</label></th>
                                        </tr>
                                        <tr>
                                            <th style="text-align:right;"><span class="parenthesis_text">Score obtained</span> </th>
                                            <th><label id="gs_score_obtained" for="">0</label></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="" class="section-title">2. SYMPTOMS</label>
                                </div>
                            </div>  
                            <div class="row">
                                <label for="">Time of onset of symptoms (<span class="parenthesis_text">circle one</span>)</label>
                                <label for="symptoms_to_0"><input type="radio" name="symptoms_to" id="symptoms_to_0" value="0"> Unknown</label>
                                <label for="symptoms_to_1"><input type="radio" name="symptoms_to" id="symptoms_to_1" value="1"> &#60; 15 days</label>
                                <label for="symptoms_to_2"><input type="radio" name="symptoms_to" id="symptoms_to_2" value="2"> &#8805; 15 days</label>
                            </div> 
                            <div class="row">
                                <div class="col-12">
                                    <label for="" class="section-title parenthesis_text">Plase, indicate all symptoms in the table below</label>
                                </div>
                            </div>   
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th>Symptom</th>
                                        <th>Yes</th>
                                        <th>No</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cognitive impairment</td>
                                        <td><input type="radio" name="sym_cogn_imp" id="sym_cogn_imp_1" value="1"></td>
                                        <td><input type="radio" name="sym_cogn_imp" id="sym_cogn_imp_0" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td>Decreased level of consciousness</td>
                                        <td><input type="radio" name="sym_dlc" id="sym_dlc_1" value="1"></td>
                                        <td><input type="radio" name="sym_dlc" id="sym_dlc_0" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td>Dizziness</td>
                                        <td><input type="radio" name="sym_dizziness" id="sym_dizziness_1" value="1"></td>
                                        <td><input type="radio" name="sym_dizziness" id="sym_dizziness_0" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td>Double or blurred vision</td>
                                        <td><input type="radio" name="sym_dbv" id="sym_dbv_1" value="1"></td>
                                        <td><input type="radio" name="sym_dbv" id="sym_dbv_0" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td>Gait instability</td>
                                        <td><input type="radio" name="sym_gait_i" id="sym_gait_i_1" value="1"></td>
                                        <td><input type="radio" name="sym_gait_i" id="sym_gait_i_0" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td>Limb numbness or tingling</td>
                                        <td><input type="radio" name="sym_limb_n_t" id="sym_limb_n_t_1" value="1"></td>
                                        <td><input type="radio" name="sym_limb_n_t" id="sym_limb_n_t_0" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td>Limb weakness</td>
                                        <td><input type="radio" name="sym_limb_w" id="sym_limb_w_1" value="1"></td>
                                        <td><input type="radio" name="sym_limb_w" id="sym_limb_w_0" value="0"></td>
                                    </tr>      
                                    <tr>
                                        <td>Memory loss</td>
                                        <td><input type="radio" name="sym_mem_loss" id="sym_mem_loss_1" value="1"></td>
                                        <td><input type="radio" name="sym_mem_loss" id="sym_mem_loss_0" value="0"></td>
                                    </tr>   
                                    <tr>
                                        <td>Nausea and/or vomiting</td>
                                        <td><input type="radio" name="sym_nau_vom" id="sym_nau_vom_1" value="1"></td>
                                        <td><input type="radio" name="sym_nau_vom" id="sym_nau_vom_0" value="0"></td>
                                    </tr>     
                                    <tr>
                                        <td>Seizures</td>
                                        <td><input type="radio" name="sym_seizures" id="sym_seizure_1" value="1"></td>
                                        <td><input type="radio" name="sym_seizures" id="sym_siezure_0" value="0"></td>
                                    </tr>   
                                    <tr>
                                        <td>Severe headaches</td>
                                        <td><input type="radio" name="sym_sev_heada" id="sym_sev_heada_1" value="1"></td>
                                        <td><input type="radio" name="sym_sev_heada" id="sym_sev_heada_0" value="0"></td>
                                    </tr>   
                                    <tr>
                                        <td>Speech disturbance</td>
                                        <td><input type="radio" name="sym_speech_dist" id="sym_speech_dist_1" value="1"></td>
                                        <td><input type="radio" name="sym_speech_dist" id="sym_speech_dist_0" value="0"></td>
                                    </tr> 
                                    <tr>
                                        <td>None</td>
                                        <td><input type="radio" name="sym_none" id="sym_none_1" value="1"></td>
                                        <td><input type="radio" name="sym_none" id="sym_none_0" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td>Other symptoms. If yes, specify (<span class="parenthesis_text">100-character limit</span>)</td>
                                        <td><input type="radio" name="sym_other" id="sym_other_1" value="1"></td>
                                        <td><input type="radio" name="sym_other" id="sym_other_0" value="0"></td>                                        
                                    </tr>
                                    <tr>
                                        <td colspan="3"><input type="text" name="sym_other_obs" id="sym_other_obs" maxlength="100" class="form-control"></td>
                                    </tr>                                                                               
                                </tbody>
                            </table>                           
                        </div>                          
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="section-title">3. PREVIOUS NEUROLOGICAL SURGERY</label>
                            </div>
                        </div>                          
                        <div class="row">
                            <label for="">Patient has medical history of previous neurological surgery?</label>
                            <label for="prev_neuro_sugery_1"><input type="radio" name="prev_neuro_sugery" id="prev_neuro_sugery_1" value="1"> Yes</label>
                            <label for="prev_neuro_sugery_0"><input type="radio" name="prev_neuro_sugery" id="prev_neuro_sugery_0" value="0"> No</label>
                            <label for="prev_neuro_sugery_2"><input type="radio" name="prev_neuro_sugery" id="prev_neuro_sugery_2" value="2"> Unknown</label>                            
                        </div>   
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="section-title parenthesis_text">If “yes”, please indicate cause</label>
                            </div>
                        </div>    
                        <div class="row">
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th>Diagnosis</th>
                                        <th>Yes</th>
                                        <th>No</th>
                                        <th>UNK</th>
                                        <th>Date (DD-MM-YYYY)</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Chronic subdural hematoma</td>
                                        <td><input type="radio" name="pns_ch_subd_hematoma" id="pns_ch_subd_hematoma_1" value="1"></td>
                                        <td><input type="radio" name="pns_ch_subd_hematoma" id="pns_ch_subd_hematoma_0" value="0"></td>
                                        <td><input type="radio" name="pns_ch_subd_hematoma" id="pns_ch_subd_hematoma_2" value="2"></td>
                                        <td><input type="date" name="pns_ch_subd_hematoma_d" id="pns_ch_subd_hematoma_d" style="border:0; border-bottom: thin solid silver;"></td>
                                    </tr>
                                    <tr>
                                        <td>Acute subdural hematoma</td>
                                        <td><input type="radio" name="pns_ac_subd_hematoma" id="pns_ac_subd_hematoma_1" value="1"></td>
                                        <td><input type="radio" name="pns_ac_subd_hematoma" id="pns_ac_subd_hematoma_0" value="0"></td>
                                        <td><input type="radio" name="pns_ac_subd_hematoma" id="pns_ac_subd_hematoma_2" value="2"></td>
                                        <td><input type="date" name="pns_ac_subd_hematoma_d" id="pns_ac_subd_hematoma_d" style="border:0; border-bottom: thin solid silver;"></td>
                                    </tr>
                                    <tr>
                                        <td>Intraparenchymal hemorrhage (traumatic or sponstaneous)</td>
                                        <td><input type="radio" name="pns_intra_herr" id="pns_intra_herr_1" value="1"></td>
                                        <td><input type="radio" name="pns_intra_herr" id="pns_intra_herr_0" value="0"></td>
                                        <td><input type="radio" name="pns_intra_herr" id="pns_intra_herr_2" value="2"></td>
                                        <td><input type="date" name="pns_intra_herr_d" id="pns_intra_herr_d" style="border:0; border-bottom: thin solid silver;"></td>
                                    </tr>
                                    <tr>
                                        <td>Aneurismal subarachnoid hemorrhage</td>
                                        <td><input type="radio" name="pns_aneu_sub_hemorr" id="pns_aneu_sub_hemorr_1" value="1"></td>
                                        <td><input type="radio" name="pns_aneu_sub_hemorr" id="pns_aneu_sub_hemorr_0" value="0"></td>
                                        <td><input type="radio" name="pns_aneu_sub_hemorr" id="pns_aneu_sub_hemorr_2" value="2"></td>
                                        <td><input type="date" name="pns_aneu_sub_hemorr_d" id="pns_aneu_sub_hemorr_d" style="border:0; border-bottom: thin solid silver;"></td>
                                    </tr>      
                                    <tr>
                                        <td>Hydrocephalus</td>
                                        <td><input type="radio" name="pns_hydroceph" id="pns_hydroceph_1" value="1"></td>
                                        <td><input type="radio" name="pns_hydroceph" id="pns_hydroceph_0" value="0"></td>
                                        <td><input type="radio" name="pns_hydroceph" id="pns_hydroceph_2" value="2"></td>
                                        <td><input type="date" name="pns_hydroceph_d" id="pns_hydroceph_d" style="border:0; border-bottom: thin solid silver;"></td>
                                    </tr> 
                                    <tr>
                                        <td>Brain tumor</td>
                                        <td><input type="radio" name="pns_brain_tumor" id="pns_brain_tumor_1" value="1"></td>
                                        <td><input type="radio" name="pns_brain_tumor" id="pns_brain_tumor_0" value="0"></td>
                                        <td><input type="radio" name="pns_brain_tumor" id="pns_brain_tumor_2" value="2"></td>
                                        <td><input type="date" name="pns_brain_tumor_d" id="pns_brain_tumor_d" style="border:0; border-bottom: thin solid silver;"></td>
                                    </tr>   
                                    <tr>
                                        <td>Spine surgery</td>
                                        <td><input type="radio" name="pns_spine_surgery" id="pns_spine_surgery_1" value="1"></td>
                                        <td><input type="radio" name="pns_spine_surgery" id="pns_spine_surgery_0" value="0"></td>
                                        <td><input type="radio" name="pns_spine_surgery" id="pns_spine_surgery_2" value="2"></td>
                                        <td><input type="date" name="pns_spine_surgery_d" id="pns_spine_surgery_d" style="border:0; border-bottom: thin solid silver;"></td>
                                    </tr> 
                                    <tr>
                                        <td>Other(<span class="parenthesis_text">If “Yes”, Specify</span>)</td>
                                        <td><input type="radio" name="pns_other" id="pns_other_1" value="1"></td>
                                        <td><input type="radio" name="pns_other" id="pns_other_0" value="0"></td>
                                        <td><input type="radio" name="pns_other" id="pns_other_2" value="2"></td>
                                        <td><input type="date" name="pns_other_d" id="pns_other_d" style="border:0; border-bottom: thin solid silver;"></td>
                                    </tr>  
                                    <tr>
                                        <td colspan="5"><input type="text" name="pns_other_obs" id="pns_other_obs" maxlength="100" class="form-control"></td>
                                    </tr>                                                                                                                                                                                                                                                                                                           
                                </tbody>
                            </table>
                            <div class="row">
                                <div style="display: flex">
                                    <div style="width:30%">Current event is the first cSDH that has been diagnosed (de novo)?</div>
                                    <div style="width:20%"><label for=""><input type="radio" name="first_cSDH" id="first_cSDH_1" value="1">  Yes</label></div>
                                    <div style="width:20%"><label for=""><input type="radio" name="first_cSDH" id="first_cSDH_0" value="0">  No</label></div>
                                </div>
                            </div>  
                            <div class="row">
                                <div style="display: flex">
                                    <div style="width:30%">Current event is a <i class="parenthesis_text">recurrence</i> of a cSDH previously treated?</div>
                                    <div style="width:20%"><label for=""><input type="radio" name="first_cSDH" id="first_cSDH_1" value="1">  Yes</label></div>
                                    <div style="width:20%"><label for=""><input type="radio" name="first_cSDH" id="first_cSDH_0" value="0">  No</label></div>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-5">
                                    <label for="" class="section-title parenthesis_text">If “yes”, please indicate date of previous surgery</label>
                                </div>
                                <div class="col-2">                                        
                                    <input type="date" name="pns_prev_cSDH_surg_d" id="pns_prev_cSDH_surg_d" style="border:0; border-bottom: thin solid silver;">
                                </div>   
                                <div class="col-12">
                                    <label for="" class="section-title parenthesis_text">Please, indicate details of past event (cSDH uni or bilateral, technical aspects of surgery [burr
hole or drill, subdural drainage], complications, etc.)</label>
                                </div>
                                <div class="col-12">
                                    <textarea name="pns_prev_cSDH_surg_obs" id="pns_prev_cSDH_surg_obs" class="form-control" rows="2"></textarea>
                                </div>                            
                            </div>    
                            <div class="row">
                                <label for="">Current event (cSDH) is the progression of one known acute subdural hematoma?</label>
                                <label for="prog_acute_subh_1"><input type="radio" name="prog_acute_subh" id="prog_acute_subh_1" value="1"> Yes</label>
                                <label for="prog_acute_subh_0"><input type="radio" name="prog_acute_subh" id="prog_acute_subh_0" value="0"> No</label>
                            </div>   
                            <div class="row">
                                <div class="col-5">
                                    <label for="" class="section-title parenthesis_text">If “yes”, please indicate waiting time for the definitive surgery</label>
                                </div>
                                <div class="col-1">                                        
                                    <input type="number" name="prog_acute_subh_wt" id="prog_acute_subh_wt" min=0 value=0 style="border:0; border-bottom: thin solid silver;">
                                </div>       
                                </div>                                                                                                             
                            </div>  
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
</html>