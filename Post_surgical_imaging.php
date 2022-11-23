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
                            <label for=""  style="font-size:20px;">Post surgical treatment</label>
                        </div>
                    </div>
                    <hr>
                    <form action="" method=POST>
                        <?php include_once "./templates/pacient_data_pac.php"?>
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="section-title">A. POST-SURGICAL IMAGING (PRE-EMBOLIZATION)</label>
                                <p class="col-6" style="padding-left:20px;text-align: justify; text-justify: inter-word;">
                                <b>Instructions:</b> Post-surgical imaging is the second study performed. This image is mandatory before
                                endovascular embolization of MMA. If the patient does not have a post-surgical CT scan or MRI, a
                                cone beam CT performed in the angio suit can replace it.
                                </p>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-2">
                                <label for="visit_date">Date of imagin</label>
                            </div>
                            <div class="col-2">
                                <input type="date" id="imagin_date" name="imagin_date" style="border:0; border-bottom: thin solid silver;" placeholder="Imagin date">
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-12">
                                <label for=""><label>Modality </label>
                                <div class="col">
                                <label for="modality_0"><input type="radio" name="modality" id="modality_0" value="0"> MRI</label>
                                </div>
                                <div class="col">
                                <label for="modality_1"><input type="radio" name="modality" id="modality_1" value="1"> CT scan</label>
                                </div>
                                <div class="col">
                                <label for="modality_2"><input type="radio" name="modality" id="modality_2" value="2"> Cone Beam CT</label>
                                </div>                                
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-12">
                                <label for=""><label>Imaging available for core-lab evaluation? </label>
                                <div class="col">
                                <label for="img_available_1"><input type="radio" name="img_available" id="img_available_1" value="1"> Yes</label>
                                </div>
                                <div class="col">
                                <label for="img_available_0"><input type="radio" name="img_available" id="img_available_0" value="0"> No</label>
                                </div>      
                                <div class="col">
                                <label for="img_available_d"><span class="parenthesis_text">If Yes</span>, date of upload</label>
                                <input type="date" id="img_available_d" name="img_available_d" style="border:0; border-bottom: thin solid silver;" placeholder="date of upload">
                                </div>      

                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="section-title">B. IMAGING ASSESSMENT</label>
                                <p class="col-6" style="padding-left:20px;text-align: justify; text-justify: inter-word;">
                                <b>Note:</b> Complete according affected side (if “unilateral” only the affected side should be
                                completed). Imaging features must be provided by Core Lab.
                                </p>
                            </div>
                        </div>                                                                                                     
                    </form>
                    <h1 style="margin:0 auto;width:60%;text-align:center;color:blue;">Formulario aún no disponible</h1>                
                </div>    
            </div>
        </div>
    </div>
</body>
</html>