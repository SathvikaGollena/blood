<?php 

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
										<option value="">-- Select --</option>
	<optgroup title="Andaman and Nicobar Islands" label="&raquo; Andaman and Nicobar Islands">
    <option value="Nicobar">Nicobar</option>
    <option value="North and Middle Andaman">North and Middle Andaman</option>
    <option value="South Andaman">South Andaman</option>
</optgroup>

<optgroup title="Andhra Pradesh" label="&raquo; Andhra Pradesh">
    <option value="Alluri Sitarama Raju">Alluri Sitarama Raju</option>
    <option value="Anakapalle">Anakapalle</option>
    <option value="Ananthapuramu">Ananthapuramu</option>
    <option value="Annamayya">Annamayya</option>
    <option value="Bapatla">Bapatla</option>
    <option value="Chittoor">Chittoor</option>
    <option value="East Godavari">East Godavari</option>
    <option value="Eluru">Eluru</option>
    <option value="Guntur">Guntur</option>
    <option value="YSR Kadapa (Cuddapah)">YSR Kadapa (Cuddapah)</option>
    <option value="Kakinada">Kakinada</option>
    <option value="Krishna">Krishna</option>
    <option value="Konaseema">Konaseema</option>
    <option value="Kurnool">Kurnool</option>
    <option value="Parvathipuram Manyam">Parvathipuram Manyam</option>
    <option value="Nandyal">Nandyal</option>
    <option value="NTR">NTR</option>
    <option value="Palnadu">Palnadu</option>
    <option value="Prakasam">Prakasam</option>
    <option value="Nellore">Nellore</option>
    <option value="Tirupati">Tirupati</option>
    <option value="Sri Sathya Sai">Sri Sathya Sai</option>
    <option value="Srikakulam">Srikakulam</option>
    <option value="Visakhapatnam">Visakhapatnam</option>
    <option value="Vizianagaram">Vizianagaram</option>
    <option value="West Godavari">West Godavari</option>
</optgroup>


<optgroup title="Arunachal Pradesh" label="&raquo; Arunachal Pradesh">
    <option value="Anjaw">Anjaw</option>
    <option value="Changlang">Changlang</option>
    <option value="Dibang Valley">Dibang Valley</option>
    <option value="East Kameng">East Kameng</option>
    <option value="East Siang">East Siang</option>
    <option value="Kamle">Kamle</option>
    <option value="Kra Daadi">Kra Daadi</option>
    <option value="Kurung Kumey">Kurung Kumey</option>
    <option value="Lepa Rada">Lepa Rada</option>
    <option value="Lohit">Lohit</option>
    <option value="Longdling">Longding</option>
    <option value="Lower Dibang Valley">Lower Dibang Valley</option>
    <option value="Lower Siang">Lower Siang</option>
    <option value="Lower Subansiri">Lower Subansiri</option>
    <option value="Namsai">Namsai</option>
    <option value="Pakke Kessang">Pakke Kessang</option>
    <option value="Papum Pare">Papum Pare</option>
    <option value="Shi Yomi">Shi Yomi</option>
    <option value="Siang">Siang</option>
    <option value="Tawang">Tawang</option>
    <option value="Tirap">Tirap</option>
    <option value="Upper Siang">Upper Siang</option>
    <option value="Upper Subansiri">Upper Subansiri</option>
    <option value="West Kameng">West Kameng</option>
    <option value="West Siang">West Siang</option>
    <option value="Capital Complex Itanagar">Capital Complex Itanagar</option>
</optgroup>

<optgroup title="Assam" label="&raquo; Assam">
    <option value="Baksa">Baksa</option>
    <option value="Barpeta">Barpeta</option>
    <option value="Biswanath">Biswanath</option>
    <option value="Bongaigaon">Bongaigaon</option>
    <option value="Cachar">Cachar</option>
    <option value="Charaideo">Charaideo</option>
    <option value="Chirang">Chirang</option>
    <option value="Darrang">Darrang</option>
    <option value="Dhemaji">Dhemaji</option>
    <option value="Dhubri">Dhubri</option>
    <option value="Dibrugarh">Dibrugarh</option>
    <option value="Dima Hasao (North Cachar Hills)">Dima Hasao (North Cachar Hills)</option>
    <option value="Goalpara">Goalpara</option>
    <option value="Golaghat">Golaghat</option>
    <option value="Hailakandi">Hailakandi</option>
    <option value="Hojai">Hojai</option>
    <option value="Jorhat">Jorhat</option>
    <option value="Kamrup">Kamrup</option>
    <option value="Kamrup Metropolitan">Kamrup Metropolitan</option>
    <option value="Karbi Anglong">Karbi Anglong</option>
    <option value="Karimaganj">Karimaganj</option>
    <option value="Kokrajhar">Kokrajhar</option>
    <option value="Lakhimpur">Lakhimpur</option>
    <option value="Majuli">Majuli</option>
    <option value="Morigaon">Morigaon</option>
    <option value="Nagaon">Nagaon</option>
    <option value="Nalbari">Nalbari</option>
    <option value="Sivasagar">Sivasagar</option>
    <option value="Sonitpur">Sonitpur</option>
    <option value="South Salamara Mankachar">South Salamara Mankachar</option>
    <option value="Tinsukia">Tinsukia</option>
    <option value="Udakguri">Udakguri</option>
    <option value="West Karbi Anglong">West Karbi Anglong</option>
    <option value="Bajali">Bajali</option>
    <option value="Tamulpur">Tamulpur</option>
</optgroup>

<optgroup title="Bihar" label="&raquo; Bihar">
    <option value="Araria">Araria</option>
    <option value="Arwal">Arwal</option>
    <option value="Aurangabad">Aurangabad</option>
    <option value="Banka">Banka</option>
    <option value="Begusarai">Begusarai</option>
    <option value="Bhagalpur">Bhagalpur</option>
    <option value="Bhojpur">Bhojpur</option>
    <option value="Buxar">Buxar</option>
    <option value="Darbhanga">Darbhanga</option>
    <option value="East Champaran (Motihari)">East Champaran (Motihari)</option>
    <option value="Gaya">Gaya</option>
    <option value="Gopalganj">Gopalganj</option>
    <option value="Jamui">Jamui</option>
    <option value="Jehanabad">Jehanabad</option>
    <option value="Kaimur (Bhabua)">Kaimur (Bhabua)</option>
    <option value="Katihar">Katihar</option>
    <option value="Khagaria">Khagaria</option>
    <option value="Kishanganj">Kishanganj</option>
    <option value="Lakhisarai">Lakhisarai</option>
    <option value="Madhepura">Madhepura</option>
    <option value="Madhubani">Madhubani</option>
    <option value="Munger (Monghyr)">Munger (Monghyr)</option>
    <option value="Muzaffarpur">Muzaffarpur</option>
    <option value="Nalanda">Nalanda</option>
    <option value="Nawada">Nawada</option>
    <option value="Patna">Patna</option>
    <option value="Purnia (Purnea)">Purnia (Purnea)</option>
    <option value="Rohtas">Rohtas</option>
    <option value="Saharasa">Saharasa</option>
    <option value="Samastipur">Samastipur</option>
    <option value="Saran">Saran</option>
    <option value="Sheikhpura">Sheikhpura</option>
    <option value="Sheohar">Sheohar</option>
    <option value="Sitamarhi">Sitamarhi</option>
    <option value="Siwan">Siwan</option>
    <option value="Supaul">Supaul</option>
    <option value="Vaishali">Vaishali</option>
    <option value="West Champaran">West Champaran</option>
</optgroup>

<optgroup title="Chhattisgarh" label="&raquo; Chhattisgarh">
    <option value="Balod">Balod</option>
    <option value="Baloda Bazar">Baloda Bazar</option>
    <option value="Balrampur">Balrampur</option>
    <option value="Bastar">Bastar</option>
    <option value="Bemetara">Bemetara</option>
    <option value="Bijapur">Bijapur</option>
    <option value="Bilaspur">Bilaspur</option>
    <option value="Dantewada (South Bastar)">Dantewada (South Bastar)</option>
    <option value="Dhamtari">Dhamtari</option>
    <option value="Durg">Durg</option>
    <option value="Gariyaband">Gariyaband</option>
    <option value="Janjgir-Champa">Janjgir-Champa</option>
    <option value="Jashpur">Jashpur</option>
    <option value="Kabirdham (Kawardha)">Kabirdham (Kawardha)</option>
    <option value="Kanker (North Bastar)">Kanker (North Bastar)</option>
    <option value="Kondagaon">Kondagaon</option>
    <option value="Korba">Korba</option>
    <option value="Korea (Koriya)">Korea (Koriya)</option>
    <option value="Mahasamund">Mahasamund</option>
    <option value="Mungeli">Mungeli</option>
    <option value="Narayanpur">Narayanpur</option>
    <option value="Raigarh">Raigarh</option>
    <option value="Raipur">Raipur</option>
    <option value="Rajnandgaon">Rajnandgaon</option>
    <option value="Sukma">Sukma</option>
    <option value="Surajpur">Surajpur</option>
    <option value="Surguja">Surguja</option>
    <option value="Gaurela-Pendra-Marwahi">Gaurela-Pendra-Marwahi</option>
    <option value="Khairagarh-Chhuikhadan-Gandai">Khairagarh-Chhuikhadan-Gandai</option>
    <option value="Manendragarh-Chirmiri-Bharatpur">Manendragarh-Chirmiri-Bharatpur</option>
    <option value="Mohla-Manpur-Chowki">Mohla-Manpur-Chowki</option>
    <option value="Sarangarh-Bilaigarh">Sarangarh-Bilaigarh</option>
    <option value="Shakti">Shakti</option>
</optgroup>

<optgroup title="Dadra and Nagar Haveli and Daman and Diu" label="&raquo; Dadra and Nagar Haveli and Daman and Diu">
    <option value="Dadra And Nagar Haveli">Dadra And Nagar Haveli</option>
    <option value="Daman">Daman</option>
    <option value="Diu">Diu</option>
</optgroup>

<optgroup title="Delhi" label="&raquo; Delhi">
    <option value="Central Delhi">Central Delhi</option>
    <option value="East Delhi">East Delhi</option>
    <option value="New Delhi">New Delhi</option>
    <option value="North Delhi">North Delhi</option>
    <option value="North East Delhi">North East Delhi</option>
    <option value="North West Delhi">North West Delhi</option>
    <option value="Shahdara">Shahdara</option>
    <option value="South Delhi">South Delhi</option>
    <option value="South East Delhi">South East Delhi</option>
    <option value="South West Delhi">South West Delhi</option>
    <option value="West Delhi">West Delhi</option>
</optgroup>

<optgroup title="Goa" label="&raquo; Goa">
    <option value="North Goa">North Goa</option>
    <option value="South Goa">South Goa</option>
</optgroup>

<optgroup title="Gujarat" label="&raquo; Gujarat">
    <option value="Ahmedabad">Ahmedabad</option>
    <option value="Amreli">Amreli</option>
    <option value="Anand">Anand</option>
    <option value="Arvalli">Arvalli</option>
    <option value="Banaskantha (Palanpur)">Banaskantha (Palanpur)</option>
    <option value="Bharuch">Bharuch</option>
    <option value="Bhavnagar">Bhavnagar</option>
    <option value="Botad">Botad</option>
    <option value="Chhota Udepur">Chhota Udepur</option>
    <option value="Dahod">Dahod</option>
    <option value="Dangs (Ahwa)">Dangs (Ahwa)</option>
    <option value="Devbhoomi Dwarka">Devbhoomi Dwarka</option>
    <option value="Gandhinagar">Gandhinagar</option>
    <option value="Gir Somnath">Gir Somnath</option>
    <option value="Jamnagar">Jamnagar</option>
    <option value="Junagadh">Junagadh</option>
    <option value="Kachchh">Kachchh</option>
    <option value="Kheda (Nadiad)">Kheda (Nadiad)</option>
    <option value="Mahisagar">Mahisagar</option>
    <option value="Mehsana">Mehsana</option>
    <option value="Morbi">Morbi</option>
    <option value="Narmada (Rajpipla)">Narmada (Rajpipla)</option>
    <option value="Navsari">Navsari</option>
    <option value="Panchmahal (Godhra)">Panchmahal (Godhra)</option>
    <option value="Patan">Patan</option>
    <option value="Porbandar">Porbandar</option>
    <option value="Rajkot">Rajkot</option>
    <option value="Sabarkantha (Himmatnagar)">Sabarkantha (Himmatnagar)</option>
    <option value="Surat">Surat</option>
    <option value="Surendranagar">Surendranagar</option>
    <option value="Tapi (Vyara)">Tapi (Vyara)</option>
    <option value="Vadodara">Vadodara</option>
    <option value="Valsad">Valsad</option>
</optgroup>

<optgroup title="Haryana" label="&raquo; Haryana">
    <option value="Ambala">Ambala</option>
    <option value="Bhiwani">Bhiwani</option>
    <option value="Charkhi Dadri">Charkhi Dadri</option>
    <option value="Faridabad">Faridabad</option>
    <option value="Gurgaon">Gurgaon</option>
    <option value="Hisar">Hisar</option>
    <option value="Jhajjar">Jhajjar</option>
    <option value="Jind">Jind</option>
    <option value="Kaithal">Kaithal</option>
    <option value="Karnal">Karnal</option>
    <option value="Kurukshetra">Kurukshetra</option>
    <option value="Mahendragarh">Mahendragarh</option>
    <option value="Nuh">Nuh</option>
    <option value="Palwal">Palwal</option>
    <option value="Panchkula">Panchkula</option>
    <option value="Panipat">Panipat</option>
    <option value="Rewari">Rewari</option>
    <option value="Rohtak">Rohtak</option>
    <option value="Sirsa">Sirsa</option>
    <option value="Sonipat">Sonipat</option>
    <option value="Yamunanagar">Yamunanagar</option>
    <option value="Fatehabad">Fatehabad</option>
</optgroup>

<optgroup title="Himachal Pradesh" label="&raquo; Himachal Pradesh">
    <option value="Bilaspur">Bilaspur</option>
    <option value="Chamba">Chamba</option>
    <option value="Hamirpur">Hamirpur</option>
    <option value="Kangra">Kangra</option>
    <option value="Kinnaur">Kinnaur</option>
    <option value="Kullu">Kullu</option>
    <option value="Lahaul & Spiti">Lahaul & Spiti</option>
    <option value="Mandi">Mandi</option>
    <option value="Shimla">Shimla</option>
    <option value="Sirmaur">Sirmaur</option>
    <option value="Solan">Solan</option>
    <option value="Una">Una</option>
</optgroup>

<optgroup title="Jammu and Kashmir" label="&raquo; Jammu and Kashmir">
    <option value="Anantnag">Anantnag</option>
    <option value="Bandipore">Bandipore</option>
    <option value="Baramulla">Baramulla</option>
    <option value="Budgam">Budgam</option>
    <option value="Doda">Doda</option>
    <option value="Ganderbal">Ganderbal</option>
    <option value="Jammu">Jammu</option>
    <option value="Kathua">Kathua</option>
    <option value="Kishtwar">Kishtwar</option>
    <option value="Kulgam">Kulgam</option>
    <option value="Kupwara">Kupwara</option>
    <option value="Poonch">Poonch</option>
    <option value="Pulwama">Pulwama</option>
    <option value="Rajouri">Rajouri</option>
    <option value="Ramban">Ramban</option>
    <option value="Reasi">Reasi</option>
    <option value="Samba">Samba</option>
    <option value="Shopian">Shopian</option>
    <option value="Srinagar">Srinagar</option>
    <option value="Udhampur">Udhampur</option>
</optgroup>

<optgroup title="Jharkhand" label="&raquo; Jharkhand">
    <option value="Bokaro">Bokaro</option>
    <option value="Chatra">Chatra</option>
    <option value="Deoghar">Deoghar</option>
    <option value="Dhanbad">Dhanbad</option>
    <option value="Dumka">Dumka</option>
    <option value="East Singhbhum">East Singhbhum</option>
    <option value="Garhwa">Garhwa</option>
    <option value="Giridih">Giridih</option>
    <option value="Godda">Godda</option>
    <option value="Gumla">Gumla</option>
    <option value="Hazaribag">Hazaribag</option>
    <option value="Jamtara">Jamtara</option>
    <option value="Khunti">Khunti</option>
    <option value="Koderma">Koderma</option>
    <option value="Latehar">Latehar</option>
    <option value="Lohardaga">Lohardaga</option>
    <option value="Pakur">Pakur</option>
    <option value="Palamu">Palamu</option>
    <option value="Ramgarh">Ramgarh</option>
    <option value="Ranchi">Ranchi</option>
    <option value="Sahibganj">Sahibganj</option>
    <option value="Seraikela-Kharsawan">Seraikela-Kharsawan</option>
    <option value="Simdega">Simdega</option>
    <option value="West Singhbhum">West Singhbhum</option>
</optgroup>

<optgroup title="Karnataka" label="&raquo; Karnataka">
    <option value="Bagalkot">Bagalkot</option>
    <option value="Bellari (Bellary)">Bellari (Bellary)</option>
    <option value="Belagavi (Begaum)">Belagavi (Begaum)</option>
    <option value="Bengaluru (Bangalore) Rural">Bengaluru (Bangalore) Rural</option>
    <option value="Bengaluru (Bangalore) Urban">Bengaluru (Bangalore) Urban</option>
    <option value="Bidar">Bidar</option>
    <option value="Chamarajanagar">Chamarajanagar</option>
    <option value="Chikballapur">Chikballapur</option>
    <option value="Chikkamagaluru (Chikmagalur)">Chikkamagaluru (Chikmagalur)</option>
    <option value="Dakshina Kannada">Dakshina Kannada</option>
    <option value="Davangere">Davangere</option>
    <option value="Dharwad">Dharwad</option>
    <option value="Gadag">Gadag</option>
    <option value="Hassan">Hassan</option>
    <option value="Haveri">Haveri</option>
    <option value="Kalaburagi (Gulbaraga)">Kalaburagi (Gulbaraga)</option>
    <option value="Kodagu">Kodagu</option>
    <option value="Kolar">Kolar</option>
    <option value="Koppal">Koppal</option>
    <option value="Mandya">Mandya</option>
    <option value="Mysuru (Mysore)">Mysuru (Mysore)</option>
    <option value="Raichur">Raichur</option>
    <option value="Ramanagara">Ramanagara</option>
    <option value="Shivamogga (Shimoga)">Shivamogga (Shimoga)</option>
    <option value="Tumakuru (Tumkur)">Tumakuru (Tumkur)</option>
    <option value="Udupi">Udupi</option>
    <option value="Uttara Kannada (Karwar)">Uttara Kannada (Karwar)</option>
    <option value="Vijayapura (Bijapur)">Vijayapura (Bijapur)</option>
    <option value="Yadgir">Yadgir</option>
    <option value="Chitradurga">Chitradurga</option>
    <option value="Vijayanagara">Vijayanagara</option>
</optgroup>

<optgroup title="Kerala" label="&raquo; Kerala">
    <option value="Alappuzha">Alappuzha</option>
    <option value="Ernakulam">Ernakulam</option>
    <option value="Idukki">Idukki</option>
    <option value="Kannur">Kannur</option>
    <option value="Kasaragod">Kasaragod</option>
    <option value="Kollam">Kollam</option>
    <option value="Kottayam">Kottayam</option>
    <option value="Kozhikode">Kozhikode</option>
    <option value="Malappuram">Malappuram</option>
    <option value="Palakkad">Palakkad</option>
    <option value="Pathanamthitta">Pathanamthitta</option>
    <option value="Thiruvananthapuram">Thiruvananthapuram</option>
    <option value="Thrissur">Thrissur</option>
    <option value="Wayanad">Wayanad</option>
</optgroup>

<optgroup title="Ladakh" label="&raquo; Ladakh">
    <option value="Kargil">Kargil</option>
    <option value="Leh">Leh</option>
</optgroup>

<optgroup title="Lakshadweep" label="&raquo; Lakshadweep">
    <option value="Lakshadweep">Lakshadweep</option>
</optgroup>
<optgroup title="Madhya Pradesh" label="&raquo; Madhya Pradesh">
    <option value="Agar Malwa">Agar Malwa</option>
    <option value="Alirajpur">Alirajpur</option>
    <option value="Anuppur">Anuppur</option>
    <option value="Ashoknagar">Ashoknagar</option>
    <option value="Balaghat">Balaghat</option>
    <option value="Barwani">Barwani</option>
    <option value="Betul">Betul</option>
    <option value="Bhind">Bhind</option>
    <option value="Bhopal">Bhopal</option>
    <option value="Burhanpur">Burhanpur</option>
    <option value="Chhatarpur">Chhatarpur</option>
    <option value="Chhindwara">Chhindwara</option>
    <option value="Damoh">Damoh</option>
    <option value="Datia">Datia</option>
    <option value="Dewas">Dewas</option>
    <option value="Dhar">Dhar</option>
    <option value="Dindori">Dindori</option>
    <option value="Guna">Guna</option>
    <option value="Gwalior">Gwalior</option>
    <option value="Harda">Harda</option>
    <option value="Hoshangabad">Hoshangabad</option>
    <option value="Indore">Indore</option>
    <option value="Jabalpur">Jabalpur</option>
    <option value="Jhabua">Jhabua</option>
    <option value="Katni">Katni</option>
    <option value="Khandwa">Khandwa</option>
    <option value="Khargone">Khargone</option>
    <option value="Mandla">Mandla</option>
    <option value="Mandsaur">Mandsaur</option>
    <option value="Morena">Morena</option>
    <option value="Narsinghpur">Narsinghpur</option>
    <option value="Neemuch">Neemuch</option>
    <option value="Panna">Panna</option>
    <option value="Raisen">Raisen</option>
    <option value="Rajgarh">Rajgarh</option>
    <option value="Ratlam">Ratlam</option>
    <option value="Rewa">Rewa</option>
    <option value="Sagar">Sagar</option>
    <option value="Satna">Satna</option>
    <option value="Sehore">Sehore</option>
    <option value="Seoni">Seoni</option>
    <option value="Shahdol">Shahdol</option>
    <option value="Shajapur">Shajapur</option>
    <option value="Sheopur">Sheopur</option>
    <option value="Shivpuri">Shivpuri</option>
    <option value="Sidhi">Sidhi</option>
    <option value="Singrauli">Singrauli</option>
    <option value="Tikamgarh">Tikamgarh</option>
    <option value="Ujjain">Ujjain</option>
    <option value="Umaria">Umaria</option>
    <option value="Vidisha">Vidisha</option>
    <option value="Niwari">Niwari</option>
</optgroup>

<optgroup title="Maharashtra" label="&raquo; Maharashtra">
    <option value="Ahmednagar">Ahmednagar</option>
    <option value="Akola">Akola</option>
    <option value="Amravati">Amravati</option>
    <option value="Aurangabad">Aurangabad</option>
    <option value="Beed">Beed</option>
    <option value="Bhandara">Bhandara</option>
    <option value="Buldhana">Buldhana</option>
    <option value="Chandrapur">Chandrapur</option>
    <option value="Dhule">Dhule</option>
    <option value="Gadchiroli">Gadchiroli</option>
    <option value="Gondia">Gondia</option>
    <option value="Hingoli">Hingoli</option>
    <option value="Jalgaon">Jalgaon</option>
    <option value="Jalna">Jalna</option>
    <option value="Kolhapur">Kolhapur</option>
    <option value="Latur">Latur</option>
    <option value="Mumbai City">Mumbai City</option>
    <option value="Mumbai Suburban">Mumbai Suburban</option>
    <option value="Nagpur">Nagpur</option>
    <option value="Nanded">Nanded</option>
    <option value="Nandurbar">Nandurbar</option>
    <option value="Nashik">Nashik</option>
    <option value="Osmanabad">Osmanabad</option>
    <option value="Palghar">Palghar</option>
    <option value="Parbhani">Parbhani</option>
    <option value="Pune">Pune</option>
    <option value="Raigad">Raigad</option>
    <option value="Ratnagiri">Ratnagiri</option>
    <option value="Sangli">Sangli</option>
    <option value="Satara">Satara</option>
    <option value="Sindhudurg">Sindhudurg</option>
    <option value="Solapur">Solapur</option>
    <option value="Thane">Thane</option>
    <option value="Wardha">Wardha</option>
    <option value="Washim">Washim</option>
    <option value="Yavatmal">Yavatmal</option>
</optgroup>

<optgroup title="Manipur" label="&raquo; Manipur">
    <option value="Bishnupur">Bishnupur</option>
    <option value="Chandel">Chandel</option>
    <option value="Churachandpur">Churachandpur</option>
    <option value="Imphal East">Imphal East</option>
    <option value="Imphal West">Imphal West</option>
    <option value="Jiribam">Jiribam</option>
    <option value="Kakching">Kakching</option>
    <option value="Kamjong">Kamjong</option>
    <option value="Kangpokpi">Kangpokpi</option>
    <option value="Noney">Noney</option>
    <option value="Pherzawl">Pherzawl</option>
    <option value="Senapati">Senapati</option>
    <option value="Tamenglong">Tamenglong</option>
    <option value="Tengnoupal">Tengnoupal</option>
    <option value="Thoubal">Thoubal</option>
    <option value="Ukhrul">Ukhrul</option>
</optgroup>

<optgroup title="Meghalaya" label="&raquo; Meghalaya">
    <option value="East Garo Hills">East Garo Hills</option>
    <option value="East Jaintia Hills">East Jaintia Hills</option>
    <option value="East Khasi Hills">East Khasi Hills</option>
    <option value="North Garo Hills">North Garo Hills</option>
    <option value="Ri Bhoi">Ri Bhoi</option>
    <option value="South Garo Hills">South Garo Hills</option>
    <option value="South West Garo Hills">South West Garo Hills</option>
    <option value="South West Khasi Hills">South West Khasi Hills</option>
    <option value="West Garo Hills">West Garo Hills</option>
    <option value="West Jaintia Hills">West Jaintia Hills</option>
    <option value="West Khasi Hills">West Khasi Hills</option>
    <option value="Eastern West Khasi Hills">Eastern West Khasi Hills</option>
</optgroup>

<optgroup title="Mizoram" label="&raquo; Mizoram">
    <option value="Aizawl">Aizawl</option>
    <option value="Champhai">Champhai</option>
    <option value="Kolasib">Kolasib</option>
    <option value="Lawngtlai">Lawngtlai</option>
    <option value="Hnahthial">Hnahthial</option>
    <option value="Lunglei">Lunglei</option>
    <option value="Mamit">Mamit</option>
    <option value="Saiha">Saiha</option>
    <option value="Serchhip">Serchhip</option>
    <option value="Khawzawl">Khawzawl</option>
    <option value="Saitual">Saitual</option>
</optgroup>

<optgroup title="Nagaland" label="&raquo; Nagaland">
    <option value="Dimapur">Dimapur</option>
    <option value="Kiphire">Kiphire</option>
    <option value="Kohima">Kohima</option>
    <option value="Longleng">Longleng</option>
    <option value="Mokokchung">Mokokchung</option>
    <option value="Mon">Mon</option>
    <option value="Peren">Peren</option>
    <option value="Phek">Phek</option>
    <option value="Tuensang">Tuensang</option>
    <option value="Wokha">Wokha</option>
    <option value="Zunheboto">Zunheboto</option>
    <option value="Tseminyü">Tseminyü</option>
    <option value="Chümoukedima">Chümoukedima</option>
    <option value="Niuland">Niuland</option>
    <option value="Noklak">Noklak</option>
    <option value="Shamator">Shamator</option>
</optgroup>

<optgroup title="Odisha" label="&raquo; Odisha">
    <option value="Angul">Angul</option>
    <option value="Balangir">Balangir</option>
    <option value="Balasore">Balasore</option>
    <option value="Bargarh">Bargarh</option>
    <option value="Bhadrak">Bhadrak</option>
    <option value="Boudh">Boudh</option>
    <option value="Cuttack">Cuttack</option>
    <option value="Deogarh">Deogarh</option>
    <option value="Dhenkanal">Dhenkanal</option>
    <option value="Gajapati">Gajapati</option>
    <option value="Ganjam">Ganjam</option>
    <option value="Jagatsinghapur">Jagatsinghapur</option>
    <option value="Jajpur">Jajpur</option>
    <option value="Jharsuguda">Jharsuguda</option>
    <option value="Kalahandi">Kalahandi</option>
    <option value="Kandhamal">Kandhamal</option>
    <option value="Kendrapara">Kendrapara</option>
    <option value="Kendujhar (Keonjhar)">Kendujhar (Keonjhar)</option>
    <option value="Khordha">Khordha</option>
    <option value="Koraput">Koraput</option>
    <option value="Malkangiri">Malkangiri</option>
    <option value="Mayurbhanj">Mayurbhanj</option>
    <option value="Nabarangpur">Nabarangpur</option>
    <option value="Nayagarh">Nayagarh</option>
    <option value="Nuapada">Nuapada</option>
    <option value="Puri">Puri</option>
    <option value="Rayagada">Rayagada</option>
    <option value="Sambalpur">Sambalpur</option>
    <option value="Subarnapur">Subarnapur</option>
    <option value="Sundargarh">Sundargarh</option>
</optgroup>

<optgroup title="Puducherry" label="&raquo; Puducherry">
    <option value="Karaikal">Karaikal</option>
    <option value="Mahe">Mahe</option>
    <option value="Puducherry">Puducherry</option>
    <option value="Yanam">Yanam</option>
</optgroup>

<optgroup title="Punjab" label="&raquo; Punjab"></optgroup>
<option value="Amritsar" >Amritsar</option>
<option value="Barnala" >Barnala</option>
<option value="Bathinda" >Bathinda</option>
<option value="Faridkot" >Faridkot</option>
<option value="Fatehgarh Sahib" >Fatehgarh Sahib</option>
<option value="Fazilka" >Fazilka</option>
<option value="Ferozepur" >Ferozepur</option>
<option value="Gurdaspur" >Gurdaspur</option>
<option value="Hoshiarpur" >Hoshiarpur</option>
<option value="Jalandhar" >Jalandhar</option>
<option value="Kapurthala" >Kapurthala</option>
<option value="Ludhiana" >Ludhiana</option>
<option value="Mansa" >Mansa</option>
<option value="Moga" >Moga</option>
<option value="Muktsar" >Muktsar</option>
<option value="Nawanshahr (Shahid Bhagat Singh Nagar)" >Nawanshahr (Shahid Bhagat Singh Nagar)</option>
<option value="Parhankot" >Parhankot</option>
<option value="Patiala" >Patiala</option>
<option value="Rupnagar" >Rupnagar</option>
<option value="Sahibzada Ajit Singh Nagar (Mohali)" >Sahibzada Ajit Singh Nagar (Mohali)</option>
<option value="Sangrur" >Sangrur</option>
<option value="Tarn Taran" >Tarn Taran</option>

<optgroup title="Rajasthan" label="&raquo; Rajasthan"></optgroup>
<option value="Ajmer" >Ajmer</option>
<option value="Alwar" >Alwar</option>
<option value="Banswara" >Banswara</option>
<option value="Baran" >Baran</option>
<option value="Barmer" >Barmer</option>
<option value="Bharatpur" >Bharatpur</option>
<option value="Bhilwara" >Bhilwara</option>
<option value="Bikaner" >Bikaner</option>
<option value="Bundi" >Bundi</option>
<option value="Chittorgarh" >Chittorgarh</option>
<option value="Churu" >Churu</option>
<option value="Dausa" >Dausa</option>
<option value="Dholpur" >Dholpur</option>
<option value="Dungarpur" >Dungarpur</option>
<option value="Hanumangarh" >Hanumangarh</option>
<option value="Jaipur" >Jaipur</option>
<option value="Jaisalmer" >Jaisalmer</option>
<option value="Jalore" >Jalore</option>
<option value="Jhalawar" >Jhalawar</option>
<option value="Jhunjhunu" >Jhunjhunu</option>
<option value="Jodhpur" >Jodhpur</option>
<option value="Karauli" >Karauli</option>
<option value="Kota" >Kota</option>
<option value="Nagaur" >Nagaur</option>
<option value="Pali" >Pali</option>
<option value="Pratapgarh" >Pratapgarh</option>
<option value="Rajsamand" >Rajsamand</option>
<option value="Sawai Madhopur" >Sawai Madhopur</option>
<option value="Sikar" >Sikar</option>
<option value="Sirohi" >Sirohi</option>
<option value="Sri Ganganagar" >Sri Ganganagar</option>
<option value="Tonk" >Tonk</option>
<option value="Udaipur" >Udaipur</option>

<optgroup title="Sikkim" label="&raquo; Sikkim"></optgroup>
<option value="East Sikkim" >East Sikkim</option>
<option value="North Sikkim" >North Sikkim</option>
<option value="South Sikkim" >South Sikkim</option>
<option value="West Sikkim" >West Sikkim</option>
<option value="North Sikkim" >North Sikkim</option>
<option value="South Sikkim" >South Sikkim</option>

<optgroup title="Tamil Nadu" label="&raquo; Tamil Nadu"></optgroup>
<option value="Ariyalur" >Ariyalur</option>
<option value="Chennai" >Chennai</option>
<option value="Coimbatore" >Coimbatore</option>
<option value="Cuddalore" >Cuddalore</option>
<option value="Dharmapuri" >Dharmapuri</option>
<option value="Dindigul" >Dindigul</option>
<option value="Erode" >Erode</option>
<option value="Kanchipuram" >Kanchipuram</option>
<option value="Kanyakumari" >Kanyakumari</option>
<option value="Karur" >Karur</option>
<option value="Krishnagiri" >Krishnagiri</option>
<option value="Madurai" >Madurai</option>
<option value="Nagapattinam" >Nagapattinam</option>
<option value="Namakkal" >Namakkal</option>
<option value="Nilgiris" >Nilgiris</option>
<option value="Perambalur" >Perambalur</option>
<option value="Pudkkottai" >Pudkkottai</option>
<option value="Ramanathapuram" >Ramanathapuram</option>
<option value="Salem" >Salem</option>
<option value="Sivanganga" >Sivanganga</option>
<option value="Thanjavur" >Thanjavur</option>
<option value="Theni" >Theni</option>
<option value="Thoothukundi (Tuticorin)" >Thoothukundi (Tuticorin)</option>
<option value="Tiruchirappalli" >Tiruchirappalli</option>
<option value="Tirunelveli" >Tirunelveli</option>
<option value="Tiruppur" >Tiruppur</option>
<option value="Tiruvallur" >Tiruvallur</option>
<option value="Tiruvannamalai" >Tiruvannamalai</option>
<option value="Tiruvarur" >Tiruvarur</option>
<option value="Vellore" >Vellore</option>
<option value="Viluppuram" >Viluppuram</option>
<option value="Virdhunagar" >Virdhunagar</option>
<option value="Tenkasi" >Tenkasi</option>
<option value="Tirupattur" >Tirupattur</option>
<option value="Ranipet" >Ranipet</option>
<option value="Chengalpet" >Chengalpet</option>
<option value="Kallakurichi" >Kallakurichi</option>
<option value="Mayiladuthurai" >Mayiladuthurai</option>

<optgroup title="Telangana" label="&raquo; Telangana"></optgroup>
<option value="Adilabad" >Adilabad</option>
<option value="Bhadradri Kothagudem" >Bhadradri Kothagudem</option>
<option value="Hyderabad" >Hyderabad</option>
<option value="Jagtial" >Jagtial</option>
<option value="Jangaon" >Jangaon</option>
<option value="Jayashankar Bhupalpally" >Jayashankar Bhupalpally</option>
<option value="Jogulamba Gadwal" >Jogulamba Gadwal</option>
<option value="Kamareddy" >Kamareddy</option>
<option value="Karimnagar" >Karimnagar</option>
<option value="Khammam" >Khammam</option>
<option value="Komaram Bheem Asifabad" >Komaram Bheem Asifabad</option>
<option value="Mahabubabad" >Mahabubabad</option>
<option value="Mahabubnagar" >Mahabubnagar</option>
<option value="Mancherial" >Mancherial</option>
<option value="Medak" >Medak</option>
<option value="Medchal" >Medchal</option>
<option value="Nagarkurnool" >Nagarkurnool</option>
<option value="Nalgonda" >Nalgonda</option>
<option value="Nirmal" >Nirmal</option>
<option value="Nizamabad" >Nizamabad</option>
<option value="Peddapalli" >Peddapalli</option>
<option value="Rajanna Sircilla" >Rajanna Sircilla</option>
<option value="Rangareddy" >Rangareddy</option>
<option value="Sangareddy" >Sangareddy</option>
<option value="Siddipet" >Siddipet</option>
<option value="Suryapet" >Suryapet</option>
<option value="Vikarabad" >Vikarabad</option>
<option value="Wanaparthy" >Wanaparthy</option>
<option value="Warangal (Rural)" >Warangal (Rural)</option>
<option value="Warangal (Urban)" >Warangal (Urban)</option>
<option value="Yadadri Bhuvanagiri" >Yadadri Bhuvanagiri</option>

<optgroup title="Tripura" label="&raquo; Tripura"></optgroup>
<option value="Dhalai" >Dhalai</option>
<option value="Gomati" >Gomati</option>
<option value="Khowai" >Khowai</option>
<option value="North Tripura" >North Tripura</option>
<option value="Sepahijala" >Sepahijala</option>
<option value="South Tripura" >South Tripura</option>
<option value="Unakoti" >Unakoti</option>
<option value="West Tripura" >West Tripura</option>

<optgroup title="Uttarakhand" label="&raquo; Uttarakhand"></optgroup>
<option value="Almora" >Almora</option>
<option value="Bageshwar" >Bageshwar</option>
<option value="Chamoli" >Chamoli</option>
<option value="Champawat" >Champawat</option>
<option value="Dehradun" >Dehradun</option>
<option value="Haridwar" >Haridwar</option>
<option value="Nainital" >Nainital</option>
<option value="Pauri Garhwal" >Pauri Garhwal</option>
<option value="Pithoragarh" >Pithoragarh</option>
<option value="Rudraprayag" >Rudraprayag</option>
<option value="Tehri Garhwal" >Tehri Garhwal</option>
<option value="Udham Singh Nagar" >Udham Singh Nagar</option>
<option value="Uttarkashi" >Uttarkashi</option>

<optgroup title="Uttar Pradesh" label="&raquo; Uttar Pradesh"></optgroup>
<option value="Agra" >Agra</option>
<option value="Aligarh" >Aligarh</option>
<option value="Allahabad" >Allahabad</option>
<option value="Ambedkar Nagar" >Ambedkar Nagar</option>
<option value="Amethi (Chatrapati Sahuji Mahraj Nagar)" >Amethi (Chatrapati Sahuji Mahraj Nagar)</option>
<option value="Amroha (J.P.Nagar)" >Amroha (J.P.Nagar)</option>
<option value="Auraiya" >Auraiya</option>
<option value="Azangarh" >Azangarh</option>
<option value="Baghpat" >Baghpat</option>
<option value="Bahraich" >Bahraich</option>
<option value="Ballia" >Ballia</option>
<option value="Balrampur" >Balrampur</option>
<option value="Banda" >Banda</option>
<option value="Barabanki" >Barabanki</option>
<option value="Bareilly" >Bareilly</option>
<option value="Basti" >Basti</option>
<option value="Bhadohi" >Bhadohi</option>
<option value="Bijnor" >Bijnor</option>
<option value="Budaun" >Budaun</option>
<option value="Bulandshahr" >Bulandshahr</option>
<option value="Chandauli" >Chandauli</option>
<option value="Chitrakoot" >Chitrakoot</option>
<option value="Deoria" >Deoria</option>
<option value="Etah" >Etah</option>
<option value="Etawah" >Etawah</option>
<option value="Faizabad" >Faizabad</option>
<option value="Farrukhabad" >Farrukhabad</option>
<option value="Fatehpur" >Fatehpur</option>
<option value="Firozabad" >Firozabad</option>
<option value="Gautam Buddha Nagar" >Gautam Buddha Nagar</option>
<option value="Ghaziabad" >Ghaziabad</option>
<option value="Ghazipur" >Ghazipur</option>
<option value="Gonda" >Gonda</option>
<option value="Gorakhpur" >Gorakhpur</option>
<option value="Hamirpur" >Hamirpur</option>
<option value="Hapur (Panchsheel Nagar)" >Hapur (Panchsheel Nagar)</option>
<option value="Hardoi" >Hardoi</option>
<option value="Hathras" >Hathras</option>
<option value="Jalaun" >Jalaun</option>
<option value="Jaunpur" >Jaunpur</option>
<option value="Jhansi" >Jhansi</option>
<option value="Kannauj" >Kannauj</option>
<option value="Kanpur Dehat" >Kanpur Dehat</option>
<option value="Kanpur Nagar" >Kanpur Nagar</option>
<option value="Kanshiram Nagar (Kasganj)" >Kanshiram Nagar (Kasganj)</option>
<option value="Kaushambi" >Kaushambi</option>
<option value="Kushinagar (Padrauna)" >Kushinagar (Padrauna)</option>
<option value="Lakhimpur - Kheri" >Lakhimpur - Kheri</option>
<option value="Lalitpur" >Lalitpur</option>
<option value="Lucknow" >Lucknow</option>
<option value="Maharajganj" >Maharajganj</option>
<option value="Mahoba" >Mahoba</option>
<option value="Mainpuri" >Mainpuri</option>
<option value="Mathura" >Mathura</option>
<option value="Mau" >Mau</option>
<option value="Meerut" >Meerut</option>
<option value="Mizapur" >Mizapur</option>
<option value="Moradabad" >Moradabad</option>
<option value="Muzaffarnagar" >Muzaffarnagar</option>
<option value="Pilibhit" >Pilibhit</option>
<option value="Pratapgarh" >Pratapgarh</option>
<option value="RaeBareli" >RaeBareli</option>
<option value="Rampur" >Rampur</option>
<option value="Saharanpur" >Saharanpur</option>
<option value="Sambhal (Bhim Nagar)" >Sambhal (Bhim Nagar)</option>
<option value="Sant Kabir Nagar" >Sant Kabir Nagar</option>
<option value="Shahjahanpur" >Shahjahanpur</option>
<option value="Shamali (Prabuddh Nagar)" >Shamali (Prabuddh Nagar)</option>
<option value="Shravasti" >Shravasti</option>
<option value="Siddharth Nagar" >Siddharth Nagar</option>
<option value="Sitapur" >Sitapur</option>
<option value="Sonbhadra" >Sonbhadra</option>
<option value="Sultanpur" >Sultanpur</option>
<option value="Unnao" >Unnao</option>
<option value="Varanasi" >Varanasi</option>

<optgroup title="West Bengal" label="&raquo; West Bengal"></optgroup>
<option value="Alipurduar" >Alipurduar</option>
<option value="Bankura" >Bankura</option>
<option value="Birbhum" >Birbhum</option>
<option value="Cooch Behar" >Cooch Behar</option>
<option value="Dakshin Dinajpur (South Dinajpur)" >Dakshin Dinajpur (South Dinajpur)</option>
<option value="Darjeeling" >Darjeeling</option>
<option value="Hooghly" >Hooghly</option>
<option value="Howrah" >Howrah</option>
<option value="Jalpaiguri" >Jalpaiguri</option>
<option value="Jhargram" >Jhargram</option>
<option value="Kalimpong" >Kalimpong</option>
<option value="Kolkata" >Kolkata</option>
<option value="Malda" >Malda</option>
<option value="Murshidabad" >Murshidabad</option>
<option value="Nadia" >Nadia</option>
<option value="North 24 Parganas" >North 24 Parganas</option>
<option value="Paschim Bardhaman (West Bardhaman)" >Paschim Bardhaman (West Bardhaman)</option>
<option value="Paschim Medinipur (West Medinipur)" >Paschim Medinipur (West Medinipur)</option>
<option value="Purba Bardhaman (East Bardhaman)" >Purba Bardhaman (East Bardhaman)</option>
<option value="Purba Medinipur (East Medinipur)" >Purba Medinipur (East Medinipur)</option>
<option value="Purulia" >Purulia</option>
<option value="South 24 Parganas" >South 24 Parganas</option>
<option value="Uttar Dinajpur (North Dinajpur)" >Uttar Dinajpur (North Dinajpur)</option>



</select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
							A seamless platform connecting donors and healthcare providers, simplifying donations and ensuring a robust supply chain. With innovative technology, we're fostering real-time tracking for a future where healthcare is revolutionized through efficient blood management. blood units, fostering a responsive and reliable system.
						</p>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									Our vision is to create a seamless platform connecting donors, simplifying donations and ensuring a robust supply chain. With innovative technology, we're fostering real-time tracking for a future where healthcare is revolutionized through efficient blood management.
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									Our primary goal is to improve access to vital contact information for blood donors based on location and blood group. Utilizing SQL, PHP, HTML, and CSS, our platform offers a user-friendly interface for swift donor information retrieval, fostering a responsive and life-saving network.
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									Our mission is to create a platform that enhances donor information accessibility. With a commitment to user-friendly design and seamless platform we bridge the gap between donors and recipients, establishing a responsive and life-saving network.
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>