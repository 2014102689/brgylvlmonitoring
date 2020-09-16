<!-- Modal Section -->
<div class="bg-modal">
    <div class="modal-contents">
        <h3>Generate Report</h3>
        <div class="close">+</div>
        <form method="post" action="utilities/generate-report.php">  
            <div class="col-md-12 mb-2">
                <small id="msg"></small>
                <select name="Type" class="form-control">
                    <option value="NULL">Patient Type</option>
                    <option value="PUI">PUI</option>
                    <option value="PUM">PUM</option>
                </select>
            </div>
            <div class="col-md-12 mb-2">
                <small id="msg"></small>
                <select name="Test" class="form-control">
                    <option value="NULL">Covid Test</option>
                    <option value="N/A">To be tested</option>
                    <option value="Swab">Swab</option>
                    <option value="Rapid">Rapid</option>
                </select>
            </div>
            <div class="col-md-12 mb-2">
                <small id="msg"></small>
                <select name="Status" class="form-control">
                    <option value="NULL">Patient Status</option>
                    <option value="N/A">To be tested</option>
                    <option value="Negative">Negative</option>
                    <option value="Positive">Positive</option>
                </select>
            </div>
            <div class="col-md-12 mb-2">
                    <small id="msg"></small>
                    <select name="QrtnType" class="form-control">
                        <option value="NULL">Quarantine Type</option>
                        <option value="Homebase">Homebase</option>
                        <option value="Isolation Unit">Isolation Unit</option>
                    </select>
            </div>
            <div class="col-md-12 mb-2">
                    <small id="msg"></small>
                    <select name="Diagnosis"class="form-control">
                        <option value="NULL">Diagnosis</option>
                        <option value="Under Observation">Under Observation</option>
                        <option value="Negative">Negative</option>
                        <option value="Symptomatic">Symptomatic</option>
                        <option value="Asymptomatic">Asymptomatic</option>
                    </select>
            </div>
            <div class="col-md-12 mb-2">
                    <small id="msg"></small>
                    <select name="QrtnStatus"class="form-control">
                        <option value="NULL">Quarantine Status</option>
                        <option value="On going">On going</option>
                        <option value="Completed">Completed</option>
                    </select>
            </div>
            <input type="submit" name="generate" class="btn btn-primary" value="Generate" />  
        </form>

    </div>
</div>