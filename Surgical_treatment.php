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
                            <label for=""  style="font-size:20px;">Surgical treatment</label>
                        </div>
                    </div>
                    <hr>
                    <form action="" method=POST>
                        <?php include_once "./templates/pacient_data_pac.php"?>                        
                        <div class="row">
                            <div class="col-2">
                                <label for="visit_date">Date of surgery</label>
                            </div>
                            <div class="col-2">
                                <input type="date" id="date_of_surgery" name="date_of_surgery" style="border:0; border-bottom: thin solid silver;" placeholder="date of surgery">
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-2">
                                <label for="visit_date">Main surgeon</label>
                            </div>
                            <div class="col-2">
                                <input type="text" id="main_surgeon_name" name="main_surgeon_name" style="border:0; border-bottom: thin solid silver;" placeholder="main surgeon name">
                            </div>
                            <div class="col-2">
                                <input type="text" id="main_surgeon_last_name" name="main_surgeon_name_last" style="border:0; border-bottom: thin solid silver;" placeholder="main surgeon last name"><label for="">MD</label>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="section-title">Procedure</label>
                                <p class="col-6" style="padding-left:20px;text-align: justify; text-justify: inter-word;">
                                <b>Note:</b> Complete according affected side (if “unilateral” only the affected side should be completed).         
                                </p>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="section-title"><label class="parenthesis_text"> RIGHT</label> SIDE CHRONIC SUBDURAL HEMATOMA</label>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-12">
                                <label for=""><label>Evacuation was performed by </label>
                                <div class="col">
                                <label for="rs_evac_performed_by_0"><input type="radio" name="rs_evac_performed_by" id="rs_evac_performed_by_0" value="0"> Burr hole [hole diameter &gt; 5 mm up to 30 mm]</label>
                                </div>
                                <div class="col">
                                <label for="rs_evac_performed_by_0"><input type="radio" name="rs_evac_performed_by" id="rs_evac_performed_by_1" value="1"> Drill [hole diameter up to 5 mm]</label>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-12">
                                <label for=""><label>After evacuation an irrigation solution was used? </label>
                                <div class="col">
                                <label for="rs_irrig_sol_1"><input type="radio" name="rs_irrig_sol" id="rs_irrig_sol_1" value="1"> Yes</label>
                                </div>
                                <div class="col">
                                <label for="rs_irrig_sol_0"><input type="radio" name="rs_irrig_sol" id="rs_irrig_sol_0" value="0"> No</label>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-12">
                                <label for=""><label>Post operative closed-system drainage was used? </label>
                                <div class="col">
                                <label for="rs_clo_sys_drain_1"><input type="radio" name="rs_clo_sys_drain" id="rs_clo_sys_drain_1" value="1"> Yes</label>
                                </div>
                                <div class="col">
                                <label for="rs_clo_sys_drain_0"><input type="radio" name="rs_clo_sys_drain" id="rs_clo_sys_drain_0" value="0"> No</label>
                                </div>
                            </div>
                        </div>     
                        <div class="row">
                            <div class="col-12">
                                <label for=""><label><span class="parenthesis_text">If yes</span>, it was removed </label>
                                <div class="col">
                                <label for="rs_drain_rem_0"><input type="radio" name="rs_drain_rem" id="rs_drain_rem_0" value="0"> &lt; 24 hours after surgery</label>
                                </div>
                                <div class="col">
                                <label for="rs_drain_rem_1"><input type="radio" name="rs_drain_rem" id="rs_drain_rem_1" value="1"> 24-48 hours after surgery</label>
                                </div>
                                <div class="col">
                                <label for="rs_drain_rem_2"><input type="radio" name="rs_drain_rem" id="rs_drain_rem_2" value="2"> &gt; 48 hours after surgery</label>
                                </div>                                
                            </div>       
                        </div>    
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="section-title"><label class="parenthesis_text"> LEFT</label> SIDE CHRONIC SUBDURAL HEMATOMA</label>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-12">
                                <label for=""><label>Evacuation was performed by </label>
                                <div class="col">
                                <label for="ls_evac_performed_by_0"><input type="radio" name="ls_evac_performed_by" id="ls_evac_performed_by_0" value="0"> Burr hole [hole diameter &gt; 5 mm up to 30 mm]</label>
                                </div>
                                <div class="col">
                                <label for="ls_evac_performed_by_0"><input type="radio" name="ls_evac_performed_by" id="ls_evac_performed_by_1" value="1"> Drill [hole diameter up to 5 mm]</label>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-12">
                                <label for=""><label>After evacuation an irrigation solution was used? </label>
                                <div class="col">
                                <label for="ls_irrig_sol_1"><input type="radio" name="ls_irrig_sol" id="ls_irrig_sol_1" value="1"> Yes</label>
                                </div>
                                <div class="col">
                                <label for="ls_irrig_sol_0"><input type="radio" name="ls_irrig_sol" id="ls_irrig_sol_0" value="0"> No</label>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-12">
                                <label for=""><label>Post operative closed-system drainage was used? </label>
                                <div class="col">
                                <label for="ls_clo_sys_drain_1"><input type="radio" name="ls_clo_sys_drain" id="ls_clo_sys_drain_1" value="1"> Yes</label>
                                </div>
                                <div class="col">
                                <label for="ls_clo_sys_drain_0"><input type="radio" name="ls_clo_sys_drain" id="ls_clo_sys_drain_0" value="0"> No</label>
                                </div>
                            </div>
                        </div>     
                        <div class="row">
                            <div class="col-12">
                                <label for=""><label><span class="parenthesis_text">If yes</span>, it was removed </label>
                                <div class="col">
                                <label for="ls_drain_rem_0"><input type="radio" name="ls_drain_rem" id="ls_drain_rem_0" value="0"> &lt; 24 hours after surgery</label>
                                </div>
                                <div class="col">
                                <label for="ls_drain_rem_1"><input type="radio" name="ls_drain_rem" id="ls_drain_rem_1" value="1"> 24-48 hours after surgery</label>
                                </div>
                                <div class="col">
                                <label for="ls_drain_rem_2"><input type="radio" name="ls_drain_rem" id="ls_drain_rem_2" value="2"> &gt; 48 hours after surgery</label>
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