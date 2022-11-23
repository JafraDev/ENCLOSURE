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
                            <label for=""  style="font-size:20px;">Baseline imaging</label>
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
                            <div class="col-12">
                                <label for="" class="section-title">A. PRE-TREATMENT IMAGING</label>
                                <p class="col-6" style="padding-left:20px;text-align: justify; text-justify: inter-word;">
                                <b>Instructions:</b>: Pre-treatment imaging is the first study performed. Please, indicate all the imaging
                                charactetristics of the chronic subdural hematoma under study.
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
                            <div class="col-3">
                                <label for="">Modality</label>
                            </div>
                            <div class="col-4">
                            <label for="modality_0"><input type="radio" name="modality" id="modality_0" value="0"> MRI</label>
                            <label for="modality_1"><input type="radio" name="modality" id="modality_1" value="1"> CT</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-3">
                                <label for="">Imaging available for core-lab evaluation?</label>
                            </div>
                            <div class="col-7">
                                <label for="modality_0"><input type="radio" name="modality" id="modality_0" value="0"> Yes</label>
                                <label for="modality_1"><input type="radio" name="modality" id="modality_1" value="1"> No</label>
                                <span> <label for="imagin_upload">  If <span class="parenthesis_text">Yes</span>.  Date of upload</label></span>
                                <input type="date" id="imagin_upload" name="imagin_upload" style="border:0; border-bottom: thin solid silver;" placeholder="Date of upload">
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
                        <div class="row">
                            <div class="col-3">
                                <label for="">Side</label>
                            </div>
                            <div class="col-4">
                            <label for="side_0"><input type="radio" name="side" id="side_0" value="0"> Unilateral</label>
                            <label for="side_1"><input type="radio" name="side" id="side_1" value="1"> Bilateral</label>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-3">
                                <label for="">Thickness</label>
                            </div>
                            <div class="col-3">
                            <label for="thickness_r">Right side <input type="number" name="thickness_r" id="thickness_r" value="0" min=0 style="width:80px;"> mm</label>
                            </div>
                            <div class="col-3">
                            <label for="thickness_l">Left side <input type="number" name="thickness_l" id="thickness_l" value="0" min=0 style="width:80px;"> mm</label>
                            </div>
                        </div>     
                        <div class="row">
                            <div class="col-3">
                                <label for="">Midline shift</label>
                            </div>
                            <div class="col-3">
                            <label for="midline_r">Right side <input type="number" name="midline_r" id="midline_r" value="0" min=0 style="width:80px;"> mm</label>
                            </div>
                            <div class="col-3">
                            <label for="midline_l">Left side <input type="number" name="midline_l" id="midline_l" value="0" min=0 style="width:80px;"> mm</label>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-3">
                                <label for="">Volume</label>
                            </div>
                            <div class="col-3">
                            <label for="volume_r">Right side <input type="number" name="volume_r" id="volume_r" value="0" min=0 style="width:80px;"> ml</label>
                            </div>
                            <div class="col-3">
                            <label for="volume_l">Left side <input type="number" name="volume_l" id="volume_l" value="0" min=0 style="width:80px;"> ml</label>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-3">
                                <label for="">Density (<span class="parenthesis_text">number</span>)</label>
                            </div>
                            <div class="col-3">
                                <label for="density_r">Right side <input type="number" name="density_r" id="density_r" value="0" min=0 style="width:80px;"></label>
                            </div>
                            <div class="col-3">
                                <label for="density_l">Left side <input type="number" name="density_l" id="density_l" value="0" min=0 style="width:80px;"></label>
                            </div>
                        </div>    
                        <div class="row">
                            <p class="col-9" style="padding-left:20px;text-align: justify; text-justify: inter-word;">
                            <b>(1)</b> homogeneous hypodense; <b>(2)</b> homogeneous isodense; <b>(3)</b> homogeneous hyperdense; <b>(4)</b> mixed
                            density or MRI appearance (hypo-, iso- or hyperintensity on T1, T2, and DWimaging)
                            </p>
                        </div>  
                        <div class="row">
                            <div class="col-3">
                                <label for="">Architecture type (<span class="parenthesis_text">number</span>)</label>
                            </div>
                            <div class="col-3">
                                <label for="architecture_t_r">Right side <input type="number" name="architecture_t_r" id="architecture_t_r" value="0" min=1 style="width:80px;"></label>
                            </div>
                            <div class="col-3">
                                <label for="architecture_t_l">Left side <input type="number" name="architecture_t_l" id="architecture_t_l" value="0" min=1 style="width:80px;"></label>
                            </div>
                        </div> 
                        <div class="row">
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th>Architecture by Nakaguchi</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1. Homogeneous</td>
                                        <td>
                                        Hematoma with complete homogeneous density,
                                        including homogeneous hypo-, iso-, and hyperdense
                                        hematoma
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2. Laminar</td>
                                        <td>
                                        Hematoma with thin high-density layer along the
                                        inner membrane (against the surface of the cortex)                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3. Separated</td>
                                        <td>
                                        Hematoma with two components of different
                                        densities with a clear boundary between them,
                                        resulting in a lower density component above a
                                        higher density component. If this boundary was
                                        mingled at the border, this was called a gradation
                                        type                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4. Trabecular</td>
                                        <td>
                                        Hematoma with inhomogeneous components and a
                                        high density septum running between the inner and
                                        outer hematoma membrane                                            
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>   
                        <div class="row">
                            <div class="col-3">
                                <label for="">Intraparenchymal lesion</label>
                            </div>
                            <div class="col-3">
                                <label for="intraparenchymal_l_r">Right side <input type="number" name="intraparenchymal_l_r" id="intraparenchymal_l_r" value="0" min=1 style="width:80px;"></label>
                            </div>
                            <div class="col-3">
                                <label for="intraparenchymal_l_l">Left side <input type="number" name="intraparenchymal_l_l" id="intraparenchymal_l_l" value="0" min=1 style="width:80px;"></label>
                            </div>
                        </div> 
                        <div class="row">
                            <p class="col-9" style="padding-left:20px;text-align: justify; text-justify: inter-word;">
                            <b>(1)</b> No <b>(2)</b> Ischemia <b>(3)</b> hemorrhage <b>
                            </p>
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