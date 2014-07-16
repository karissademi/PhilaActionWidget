<?php
/* Plugin Name: Phila Action Widget
Plugin URI: localhost/wordpress
Description: Displays Actionable Items
Version: 1.0
Author: Andrew Kennel
Author URI: localhost/wordpress
*/
add_shortcode('PhilaActionWidget', 'philaaction_handler');

function philaaction_handler(){
$message = <<<EOM
 
<div id="PhilaActionWidget" class="PhilaWidget">
	<span id="PhilaPayMainWindow">
		<h1 class="PhilaWidgetTitle">I need to</h1>
        <div id="PhilaFindLinkBlock">
                <div class="PhilaFindDropDown">
                    <select rows="2" name="PhilaFindJumpMenu" id="PhilaFindJumpMenu" onchange="javascript:document.location = this.value;">
                        <option value="" class="find">Find</option>
                        <option value="http://www.phila.gov/health/ambulatoryhealth/index.html">Health Centers</option>
                        <option value="http://www.phila.gov/prisons/inmatelocator/inmatelocator.aspx">Inmate</option>
                        <option value="http://www.phila.gov/personnel/jobs.html">Job</option>
                        <option value="http://property.phila.gov/">Property</option>
                        <option value="http://www.phila.gov/ParksandRecreation/aboutus/Pages/FindYourPath.aspx">Your Path</option>
                    </select>
            </div>
		</div>
        <div id="PhilaPayLinkBlock">
			<div class="PhilaPayDropDown">
				<select rows="2" name="PhilaPayJumpMenu" id="PhilaPayJumpMenu" onchange="javascript:document.location = this.value;">
					<option value="#">Pay Online</option>
					<option value="https://wmq.etimspayments.com/pbw/include/philadelphia_alarms/input.jsp">Alarm Registration/Fines</option>
					<option value="https://wmq.etimspayments.com/pbw/include/philadelphia_sweep/input.jsp">Code Violation Notices</option>
					<option value="https://secure.phila.gov/PaymentCenter/AccountLookup/PaymentLookup.aspx?lookup=b518d3cc-b74c-4360-8a22-687ce6b262c9">Environmental Health Services</option>
					<option value="https://wmq.etimspayments.com/pbw/include/philadelphia_parking/input.jsp">Parking Tickets</option>
					<option value="https://ework.phila.gov/revenue/default.asp">Pay and File Taxes</option>
					<option value="http://www.phila.gov/revenue/RealEstateTax/">Real Estate Taxes</option>
					<option value="https://secure.phila.gov/PaymentCenter/AccountLookup/">Refuse Collection Fee</option>
					<option value="https://secure.phila.gov/PaymentCenter/AccountLookup/">Street Closure Permit</option>
					<option value="https://secure.phila.gov/PaymentCenter/AccountLookup/">Water Bill</option>
				</select>
			</div>
		</div>
	</span>
    <span id="PhilaReportMainWindow">
             <a href="http://www.phila.gov/ig/Pages/ReportWrongdoing.aspx" class="report">Report Fraud/Corruption</a>
             <a href="http://phillypolice.com/forms/submit-a-tip" class="submit-tip">Submit a Police Tip</a> 
        </span>
    </div>
    
EOM;

return $message;
}

function philaactionwidget($args, $instance) { // widget sidebar output
  extract($args, EXTR_SKIP);
  echo $before_widget; // pre-widget code from theme
  echo philaaction_handler();
  echo $after_widget; // post-widget code from theme
}
?>
