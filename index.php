<!-------- BD Chairman Front-End Index-main Part -------> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	    <title>BD Chairman</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	        
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!-- Font Awesome Links -->
        <link rel="stylesheet" type="text/css" href="css/all.min.css">
        <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;700;800;900&display=swap" rel="stylesheet">


        <!----- jQuery Library --->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

        <script type="text/javascript" src="js/jquery.js"></script>

    </head>

<body>
    <!------------------ Header ------------------->
    <header>
        <div class="nav-bar">
 				
 		    <div class="leftmenu">
			    <h4><a href="">BD Chairman</a></h4>
			</div>

            <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
            <i class="fas fa-bars"></i>
        </label>

			<div class="rightmenu">
			    <ul>
				    <li><a href="chs.php"><span>CHS</span></a></li>
					<li><a href="questions.php">Questions</a></li>
					<li><a href="answers.php">Answers</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="ambassadors.php">Ambassadors</a></li>
					<li><a href="development.php">Development</a></li>
					<li><i class="fas fa-user-minus"></i>
                        <ul>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                        </ul>
                    </li>
                    <label for="chk" class="hide-menu-btn">
                      <i class="fas fa-times"></i>
                    </label>
			    </ul>
			</div>
 
 		</div>
    </header>
    <!----------------- End Header ----------------->

    <!------------------- Banner ------------------->
    <section class="cbox1-banner">
        <div class="banner-text">
            <h1>Find out who is your <span id="chsp">Chairman</span></h1>
        </div>
        
        <div class="cbx-banner-form" id="chairman_search">
             
                <div class="form-group-division">
                    <select id="division" name="division">
                        <option selected="selected" value="">Choose Your Division</option>

                        <?php
                            $conn = mysqli_connect('localhost','root','','bd_chairman');
                            $query=mysqli_query($conn,"select * from division");
                            while ($row=mysqli_fetch_array($query)) {
           
                        ?>
                            <option value="<?php echo $row['id']; ?> "><?php echo $row['division']; ?> </option>
                            <?php

                            }
                            ?>
                    <!-- <option value="rangpur">Rangpur</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="dhaka">Dhaka</option>
                        <option value="khulna">Khulna</option>
                        <option value="chittagong">Chittagong</option>
                        <option value="barisal">Barisal</option>
                        <option value="mymensingh">Mymensingh</option>
                        <option value="sylhet">Sylhet</option>  -->
                    </select>
                                
                    <span id="or">Or</span>
                </div>
                        
                <div class="form-group-district">
                    <select id="district" name="district">
                        <option selected="selected" value="">Choose Your District</option>
                        <option value="1">Rangpur</option>
                        <option value="55">Bagerhat</option><option value="40">Bandarban</option><option value="34">Barguna</option><option value="35">Barisal</option><option value="36">Bhola</option><option value="18">Bogra</option><option value="41">Brahmanbaria</option><option value="42">Chandpur</option><option value="22">Chapai Nawabganj</option><option value="43">Chittagong</option><option value="56">Chuadanga</option><option value="44">Comilla</option><option value="45">Cox&#039;s Bazar</option><option value="1">Dhaka</option><option value="26">Dinajpur</option><option value="2">Faridpur</option><option value="46">Feni</option><option value="27">Gaibandha</option><option value="3">Gazipur</option><option value="4">Gopalganj</option><option value="51">Habiganj</option><option value="5">Jamalpur</option><option value="57">Jessore</option><option value="37">Jhalokati</option><option value="58">Jhenaidah</option><option value="19">Joypurhat</option><option value="47">Khagrachari</option><option value="59">Khulna</option><option value="6">Kishoreganj</option><option value="28">Kurigram</option><option value="60">Kushtia</option><option value="48">Lakshmipur</option><option value="29">Lalmonirhat</option><option value="7">Madaripur</option><option value="61">Magura</option><option value="8">Manikganj</option><option value="52">Maulvibazar</option><option value="62">Meherpur</option><option value="65">Meherpur</option><option value="9">Munshiganj</option><option value="10">Mymensingh</option><option value="20">Naogaon</option><option value="63">Narail</option><option value="11">Narayanganj</option><option value="12">Narsingdi</option><option value="21">Natore</option><option value="13">Netrokona</option><option value="30">Nilphamari</option><option value="49">Noakhali</option><option value="23">Pabna</option><option value="31">Panchagarh</option><option value="38">Patuakhali</option><option value="39">Pirojpur</option><option value="14">Rajbari</option><option value="24">Rajshahi</option><option value="50">Rangamati</option><option value="64">Satkhira</option><option value="15">Shariatpur</option><option value="16">Sherpur</option><option value="25">Sirajgonj</option><option value="53">Sunamganj</option><option value="54">Sylhet</option><option value="17">Tangail</option><option value="33">Thakurgaon</option>
                    </select>

                    <span class="or">Or</span>
                </div>

                <div class="form-group-upazila">
                    <select id="upazila" name="upazila">
                        <option selected="selected" value="">Choose Your Upazila</option>
                        <option value="283">Abhaynagar Upazila</option><option value="329">Adamdighi</option><option value="425">Aditmari</option><option value="9">Agailjhara Upazila</option><option value="453">Ajmiriganj</option><option value="57">Akhaura Upazila</option><option value="342">Akkelpur</option><option value="282">Alamdanga Upazila</option><option value="152">Alfadanga Upazila</option><option value="47">Ali kadam</option><option value="1">Amtali Upazila</option><option value="68">Anwara Upazila</option><option value="220">Araihazar Upazila</option><option value="51">Ashuganj Upazila</option><option value="323">Assasuni Upazila</option><option value="178">Astagram Upazila</option><option value="368">Atgharia Upazila</option><option value="233">Atpara Upazilla</option><option value="350">Atrai Upazila</option><option value="438">Atwari</option><option value="8">Babuganj Upazila</option><option value="356">Badalgachhi Upazila</option><option value="440">Badarganj</option><option value="526">Badda</option><option value="137">Bagaichhari Upazila</option><option value="359">Bagatipara Upazila</option><option value="270">Bagerhat Sadar Upazila</option><option value="377">Bagha</option><option value="285">Bagherpara Upazila</option><option value="378">Bagmara</option><option value="455">Bahubal</option><option value="179">Bajitpur Upazila</option><option value="11">Bakerganj Upazila</option><option value="171">Baksiganj Upazila</option><option value="484">Balaganj</option><option value="450">Baliadangi Upazila</option><option value="242">Baliakandi Upazila</option><option value="2">Bamna Upazila</option><option value="12">Banaripara Upazila</option><option value="58">Bancharampur Upazila</option><option value="222">Bandar</option><option value="43">Bandarban Sadar</option><option value="454">Baniachang</option><option value="69">Banshkhali Upazila</option><option value="358">Baraigram Upazila</option><option value="362">Baraigram Upazila</option><option value="3">Barguna Sadar Upazila</option><option value="234">Barhatta Upazilla</option><option value="10">Barisal Sadar Upazila</option><option value="138">Barkal Upazila</option><option value="463">Barlekha</option><option value="82">Barura Upazila</option><option value="260">Basail Upazila</option><option value="298">Batiaghata Upazila</option><option value="28">Bauphal Upazila</option><option value="481">Beanibazar</option><option value="127">Begumganj Upazila</option><option value="226">Belabo Upazila</option><option value="136">Belaichhari Upazila</option><option value="387">Belkuchi Upazila</option><option value="369">Bera Upazila</option><option value="528">Beraeid</option><option value="4">Betagi Upazila</option><option value="180">Bhairab Upazila</option><option value="208">Bhaluka</option><option value="36">Bhandaria</option><option value="154">Bhanga Upazila</option><option value="370">Bhangura Upazila</option><option value="527">Bhatara</option><option value="529">Bhatara</option><option value="251">Bhedarganj Upazila</option><option value="310">Bheramara</option><option value="17">Bhola Sadar Upazila</option><option value="363">Bholahat Upazila</option><option value="268">Bhuapur Upazila</option><option value="417">Bhurungamari</option><option value="59">Bijoynagar Upazila</option><option value="534">Bimanbondor</option><option value="397">Biral Upazila</option><option value="395">Birampur Upazila</option><option value="396">Birganj</option><option value="469">Bishwamvarpur</option><option value="482">Bishwanath</option><option value="70">Boalkhali Upazila</option><option value="151">Boalmari Upazila</option><option value="398">Bochaganj Upazila</option><option value="437">Boda</option><option value="330">Bogra Sadar</option><option value="50">Brahmanbaria Sadar Upazila</option><option value="83">Brahmanpara Upazila</option><option value="18">Burhanuddin Upazila</option><option value="84">Burichong Upazila</option><option value="108">Chagalnaiya</option><option value="98">Chakaria Upazila</option><option value="99">Chakaria Upazila</option><option value="71">Chandanaish Upazila</option><option value="85">Chandina Upazila</option><option value="60">Chandpur Sadar</option><option value="19">Char Fasson Upazila</option><option value="423">Char Rajibpur</option><option value="156">Charbhadrasan Upazila</option><option value="379">Charghat</option><option value="128">Chatkhil Upazila</option><option value="371">Chatmohar Upazila</option><option value="86">Chauddagram Upazila</option><option value="287">Chaugachha Upazila</option><option value="388">Chauhali Upazila</option><option value="470">Chhatak</option><option value="421">Chilmari</option><option value="399">Chirirbandar Upazila</option><option value="271">Chitalmari Upazila</option><option value="514">Chittagong City Corporation</option><option value="280">Chuadanga-S Upazila</option><option value="456">Chunarughat</option><option value="96">Comilla Sadar South Upazila</option><option value="90">Comilla Sadar Upazila</option><option value="485">Companiganj</option><option value="129">Companyganj Upazila</option><option value="100">Cox&#039;s Bazar Sadar Upazila</option><option value="299">Dacope Upazila</option><option value="109">Daganbhyan</option><option value="483">Dakshin Surma Upazila</option><option value="248">Damudya Upazila</option><option value="279">Damurhuda Upazila</option><option value="536">Dashkhan</option><option value="525">Dashkingaon</option><option value="537">Dashkinkhan</option><option value="29">Dashmina Upazila</option><option value="87">Daudkandi Upazila</option><option value="20">Daulatkhan Upazila</option><option value="308">Daulatpur</option><option value="201">Daulatpur Upazila</option><option value="324">Debhata Upazila</option><option value="88">Debidwar Upazila</option><option value="436">Debiganj</option><option value="267">Delduar Upazila</option><option value="520">Demra</option><option value="471">Derai</option><option value="170">Dewanganj Upazila</option><option value="531">Dhaka Cantonment</option><option value="508">Dhaka City Corporation-01</option><option value="509">Dhaka City Corporation-02</option><option value="510">Dhaka City Corporation-03</option><option value="511">Dhaka City Corporation-04</option><option value="513">Dhaka City Corporation-North</option><option value="512">Dhaka City Corporation-South</option><option value="353">Dhamoirhat Upazila</option><option value="145">Dhamrai Upazila</option><option value="269">Dhanbari Upazila</option><option value="472">Dharampasha</option><option value="212">Dhobaura</option><option value="539">Dhormoghar</option><option value="332">Dhunat</option><option value="333">Dhupchanchia</option><option value="301">Dighalia Upazila</option><option value="113">Dighinala Upazila</option><option value="434">Dimla</option><option value="405">Dinajpur Sadar Upazila</option><option value="146">Dohar Upazila</option><option value="433">Domar</option><option value="515">Double Mooring</option><option value="502">Doulatpur</option><option value="473">Dowarabazar</option><option value="34">Dumki Upazila</option><option value="300">Dumuria Upazila</option><option value="380">Durgapur</option><option value="235">Durgapur Upazilla</option><option value="272">Fakirhat Upazila</option><option value="61">Faridganj</option><option value="150">Faridpur Sadar Upazila</option><option value="372">Faridpur Upazila</option><option value="72">Fatikchhari Upazila</option><option value="486">Fenchuganj</option><option value="107">Feni Sadar</option><option value="111">Fhulgazi</option><option value="213">Fulbaria</option><option value="408">Fulchhari</option><option value="504">Fulpur</option><option value="334">Gabtali</option><option value="214">Gaffargaon</option><option value="409">Gaibandha sadar</option><option value="30">Galachipa Upazila</option><option value="442">Gangachara</option><option value="498">Gangni</option><option value="316">Gangni Upazila</option><option value="215">Gauripur</option><option value="13">Gaurnadi Upazila</option><option value="207">Gazaria Upazila</option><option value="159">Gazipur Sadar-Joydebpur</option><option value="262">Ghatail Upazila</option><option value="200">Ghior Upazila</option><option value="401">Ghoraghat Upazila</option><option value="243">Goalandaghat Upazila</option><option value="410">Gobindaganj</option><option value="381">Godagari</option><option value="487">Golapganj</option><option value="364">Gomastapur Upazila</option><option value="165">Gopalganj Sadar Upazila</option><option value="266">Gopalpur Upazila</option><option value="252">Gosairhat Upazila</option><option value="488">Gowainghat</option><option value="495">Gurudaspur</option><option value="457">Habiganj Sadar</option><option value="62">Haimchar</option><option value="517">Hajaribag</option><option value="402">Hakimpur Upazila</option><option value="210">Haluaghat</option><option value="296">Harinakunda Upazila</option><option value="451">Haripur Upazila</option><option value="199">Harirampur Upazila</option><option value="73">Hathazari Upazila</option><option value="131">Hatia Upazila</option><option value="427">Hatibandha</option><option value="63">Haziganj</option><option value="14">Hizla Upazila</option><option value="89">Homna Upazila</option><option value="181">Hossainpur Upazila</option><option value="373">Ishwardi Upazila</option><option value="216">Ishwarganj</option><option value="172">Islampur Upazila</option><option value="182">Itna Upazila</option><option value="474">Jagannathpur</option><option value="489">Jaintiapur</option><option value="250">Jajira Upazila</option><option value="431">Jaldhaka</option><option value="475">Jamalganj</option><option value="173">Jamalpur Sadar Upazila</option><option value="521">Jatrabari</option><option value="286">Jessore Sadar Upazila</option><option value="24">Jhalokati Sadar Upazila</option><option value="291">Jhenaidah Sadar Upazila</option><option value="253">Jhenaigati Upazila</option><option value="289">Jhikargachha Upazila</option><option value="281">Jibannagar Upazila</option><option value="341">Joypurhat S</option><option value="139">Juraichhari Upazila</option><option value="464">Juri</option><option value="64">Kachua</option><option value="273">Kachua Upazila</option><option value="335">Kahaloo</option><option value="403">Kaharole Upazila</option><option value="343">Kalai</option><option value="31">Kalapara Upazila</option><option value="326">Kalaroa Upazila</option><option value="321">Kalia Upazilla</option><option value="160">Kaliakior</option><option value="163">Kaliganj</option><option value="426">Kaliganj</option><option value="293">Kaliganj Upazila</option><option value="327">Kaliganj Upazila</option><option value="263">Kalihati Upazila</option><option value="192">Kalkini</option><option value="236">Kalmakanda Upazilla</option><option value="541">Kalukhali</option><option value="245">Kalukhali Upazila</option><option value="465">Kamalganj</option><option value="389">Kamarkhanda Upazila</option><option value="518">Kamrangirchar</option><option value="490">Kanaighat</option><option value="161">Kapasia</option><option value="141">Kaptai Upazila</option><option value="183">Karimganj Upazila</option><option value="56">Kasba Upazila</option><option value="166">Kashiani Upazila</option><option value="540">Kashipur</option><option value="25">Kathalia Upazila</option><option value="184">Katiadi Upazila</option><option value="37">Kaukhali</option><option value="144">Kaukhali Upazila</option><option value="530">Kaundiya</option><option value="443">Kaunia</option><option value="390">Kazipur Upazila</option><option value="232">Kendua Upazilla</option><option value="506">Keraniganj</option><option value="507">Keraniganj Others</option><option value="147">Keraniganj Upazila</option><option value="284">Keshabpur Upazila</option><option value="114">Khagrachhari Upazila</option><option value="241">Khaliajuri Upazilla</option><option value="501">Khalispur</option><option value="503">Khanjahan Ali</option><option value="404">Khansama Upazila</option><option value="344">Khetlal</option><option value="522">Khilgaon</option><option value="538">Khilkhet</option><option value="311">Khoksa</option><option value="499">Khulna Sadar</option><option value="432">Kishoreganj</option><option value="185">Kishoreganj Sadar Upazila</option><option value="132">Kobirhat Upazila</option><option value="125">Komol Nagar Upazila</option><option value="167">Kotalipara Upazila</option><option value="294">Kotchandpur Upazila</option><option value="302">Koyra Upazila</option><option value="466">Kulaura</option><option value="186">Kuliarchar Upazila</option><option value="307">Kumarkhali</option><option value="415">Kurigram Sadar</option><option value="306">Kushtia Sadar</option><option value="101">Kutubdia Upazila</option><option value="458">Lakhai</option><option value="91">Laksam Upazila</option><option value="115">Lakshmichhari Upazila</option><option value="121">Lakshmipur Sadar Upazila</option><option value="424">Lalmanirhat Sadar</option><option value="21">Lalmohan Upazila</option><option value="360">Lalpur Upazila</option><option value="45">Lama</option><option value="142">Langadu Upazila</option><option value="74">Lohagara Upazila</option><option value="320">Lohagara Upazilla</option><option value="202">Lohajang Upazila</option><option value="237">Madan Upazilla</option><option value="174">Madarganj Upazila</option><option value="191">Madaripur Sadar</option><option value="459">Madhabpur</option><option value="153">Madhukhali Upazila</option><option value="261">Madhupur Upazila</option><option value="312">Magura Sadar Upazila</option><option value="116">Mahalchhari Upazila</option><option value="102">Maheshkhali Upazila</option><option value="292">Maheshpur Upazila</option><option value="348">Manda Upazila</option><option value="117">Manikchhari Upazila</option><option value="195">Manikganj Sadar Upazila</option><option value="288">Manirampur Upazila</option><option value="22">Manpura Upazila</option><option value="38">Mathbaria</option><option value="118">Matiranga Upazila</option><option value="66">Matlab Dakkhin</option><option value="65">Matlab Uttar</option><option value="93">Meghna Upazila</option><option value="15">Mehendiganj Upazila</option><option value="496">Meherpur Sadar</option><option value="318">Meherpur-S Upazila</option><option value="175">Melandaha Upazila</option><option value="309">Mirpur</option><option value="75">Mirsharai Upazila</option><option value="32">Mirzaganj Upazila</option><option value="265">Mirzapur Upazila</option><option value="187">Mithamain Upazila</option><option value="441">Mithapukur</option><option value="347">Mohadevpur Upazila</option><option value="313">Mohammadpur Upazila</option><option value="238">Mohanganj Upazilla</option><option value="382">Mohanpur</option><option value="274">Mollahat Upazila</option><option value="275">Mongla Upazila</option><option value="227">Monohardi Upazila</option><option value="92">Monohorgonj Upazila</option><option value="276">Morrelganj Upazila</option><option value="462">Moulvibazar Sadar</option><option value="317">Mujib Nagar Upazila</option><option value="497">Mujibnagar</option><option value="168">Muksudpur Upazila</option><option value="211">Muktagachha</option><option value="7">Muladi Upazila</option><option value="204">Munshiganj Sadar Upazila</option><option value="94">Muradnagar Upazila</option><option value="217">Mymensingh Sadar</option><option value="460">Nabiganj</option><option value="53">Nabinagar Upazila</option><option value="365">Nachole Upazila</option><option value="155">Nagarkanda Upazila</option><option value="264">Nagarpur Upazila</option><option value="416">Nageshwari</option><option value="46">Naikhongchhari</option><option value="254">Nakla Upazila</option><option value="26">Nalchity Upazila</option><option value="544">Naldanga</option><option value="255">Nalitabari Upazila</option><option value="218">Nandail</option><option value="336">Nandigram</option><option value="95">Nangalkot Upazila</option><option value="143">Nannerchar Upazila</option><option value="346">Naogaon Sadar Upazila</option><option value="319">Narail-S Upazilla</option><option value="249">Naria Upazila</option><option value="228">Narsingdi Sadar Upazila</option><option value="177">Narundi Police I.C</option><option value="223">Naryanganj Sadar Upazila</option><option value="524">Nasirabad</option><option value="52">Nasirnagar Upazila</option><option value="357">Natore Sadar Upazila</option><option value="361">Natore Sadar Upazila</option><option value="406">Nawabganj</option><option value="366">Nawabganj Sadar Upazila</option><option value="148">Nawabganj Upazila</option><option value="39">Nazirpur</option><option value="40">Nesarabad</option><option value="239">Netrakona-S Upazilla</option><option value="349">Niamatpur Upazila</option><option value="188">Nikli Upazila</option><option value="429">Nilphamari Sadar</option><option value="126">Noakhali Sadar Upazila</option><option value="492">Nobigonj</option><option value="516">Osmaninagar</option><option value="383">Paba</option><option value="374">Pabna Sadar Upazila</option><option value="303">Paikgachha Upazila</option><option value="189">Pakundia Upazila</option><option value="229">Palash Upazila</option><option value="411">Palashbari</option><option value="435">Panchagarh Sadar</option><option value="345">Panchbibi</option><option value="119">Panchhari Upazila</option><option value="244">Pangsha Upazila</option><option value="407">Parbatipur Upazila</option><option value="110">Parshuram</option><option value="428">Patgram</option><option value="5">Patharghata Upazila</option><option value="76">Patiya Upazila</option><option value="352">Patnitala Upazila</option><option value="33">Patuakhali Sadar Upazila</option><option value="106">Pekua Upazila</option><option value="418">Phulbari</option><option value="400">Phulbari Upazila</option><option value="219">Phulpur</option><option value="304">Phultala Upazila</option><option value="445">Pirgachha</option><option value="446">Pirganj</option><option value="449">Pirganj Upazila</option><option value="41">Pirojpur Sadar</option><option value="355">Porsha Upazila</option><option value="240">Purbadhala Upazilla</option><option value="384">Puthia</option><option value="391">Raiganj Upazila</option><option value="122">Raipur Upazila</option><option value="230">Raipura Upazila, Narsingdi</option><option value="27">Rajapur Upazila</option><option value="419">Rajarhat</option><option value="140">Rajasthali Upazila</option><option value="246">Rajbari Sadar Upazila</option><option value="467">Rajnagar</option><option value="193">Rajoir</option><option value="494">Rajshahi City Corporation</option><option value="123">Ramganj Upazila</option><option value="120">Ramgarh Upazila</option><option value="124">Ramgati Upazila</option><option value="277">Rampal Upazila</option><option value="103">Ramu Upazila</option><option value="35">Rangabali Upazila</option><option value="135">Rangamati Sadar Upazila</option><option value="444">Rangpur Sadar</option><option value="77">Rangunia Upazila</option><option value="351">Raninagar Upazila</option><option value="452">Ranisankail Upazila</option><option value="78">Raozan Upazila</option><option value="48">Rowangchhari</option><option value="422">Rowmari</option><option value="49">Ruma</option><option value="224">Rupganj Upazila</option><option value="305">Rupsa Upazila</option><option value="157">Sadarpur Upazila</option><option value="412">Sadullapur</option><option value="413">Saghata</option><option value="337">Sahajanpur</option><option value="430">Saidpur</option><option value="259">Sakhipur Upazila</option><option value="79">Sandwip Upazila</option><option value="375">Santhia Upazila</option><option value="354">Sapahar Upazila</option><option value="54">Sarail Upazila</option><option value="278">Sarankhola Upazila</option><option value="338">Sariakandi</option><option value="176">Sarishabari Upazila</option><option value="80">Satkania Upazila</option><option value="322">Satkhira Sadar Upazila</option><option value="198">Saturia Upazila</option><option value="149">Savar Upazila</option><option value="55">Shahbazpur Town</option><option value="392">Shahjadpur Upazila</option><option value="67">Shahrasti</option><option value="295">Shailkupa Upazila</option><option value="461">Shaistagonj Upazila</option><option value="314">Shalikha Upazila</option><option value="158">Shaltha Upazila</option><option value="519">Shampur</option><option value="478">Shanthiganj</option><option value="247">Shariatpur Sadar -Palong</option><option value="290">Sharsha Upazila</option><option value="130">Shenbag Upazila</option><option value="331">Sherpur</option><option value="256">Sherpur Sadar Upazila</option><option value="197">Shibalaya Upazila</option><option value="194">Shibchar</option><option value="339">Shibganj</option><option value="367">Shibganj Upazila</option><option value="231">Shibpur Upazila</option><option value="543">Shokhipur</option><option value="328">Shyamnagar Upazila</option><option value="225">Siddirgonj Upazila</option><option value="196">Singair Upazila</option><option value="493">Singra</option><option value="205">Sirajdikhan Upazila</option><option value="386">Sirajganj Sadar Upazila</option><option value="81">Sitakunda Upazila</option><option value="523">sobujbag</option><option value="542">sodor upojela</option><option value="500">Sonadanga Metropoliton </option><option value="112">Sonagazi</option><option value="133">Sonaimuri Upazila</option><option value="221">Sonargaon Upazila</option><option value="340">Sonatala</option><option value="257">Sreebardi Upazila</option><option value="468">Sreemangal</option><option value="203">Sreenagar Upazila</option><option value="315">Sreepur Upazila</option><option value="162">Sripur</option><option value="134">Suborno Char Upazila</option><option value="376">Sujanagar Upazila</option><option value="476">Sulla</option><option value="477">Sunamganj Sadar</option><option value="414">Sundarganj</option><option value="480">Sylhet Sadar</option><option value="479">Tahirpur</option><option value="325">Tala Upazila</option><option value="6">Taltali Upazila</option><option value="258">Tangail Sadar Upazila</option><option value="385">Tanore</option><option value="447">Taraganj</option><option value="190">Tarail Upazila</option><option value="505">Tarakanda</option><option value="393">Tarash Upazila</option><option value="23">Tazumuddin Upazila</option><option value="104">Teknaf Upazila</option><option value="297">Terokhada Upazila</option><option value="439">Tetulia</option><option value="448">Thakurgaon Sadar Upazila</option><option value="44">Thanchi</option><option value="97">Titas Upazila</option><option value="164">Tongi</option><option value="206">Tongibari Upazila</option><option value="209">Trishal</option><option value="169">Tungipara Upazila</option><option value="533">Turag</option><option value="105">Ukhia Upazila</option><option value="420">Ulipur</option><option value="394">Ullahpara Upazila</option><option value="532">Uttora</option><option value="535">Uttorkhan</option><option value="16">Wazirpur Upazila</option><option value="491">Zakiganj</option><option value="42">Zianagar</option>
                    </select>

                    <span class="or">Or</span>
                </div>
                
                <div class="form-group-union">
                    <select id="union" name="union">
                        <option selected="selected" value="">Choose Your Union</option>

                    </select>
                                
                    <span id="or">Go</span>
                </div>
                
                
                <div class="form-group-btn">
                    <button id="btn-go">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>

            </div>
             
            
            <div class="form-group-label-input">
                    <label for="name" class="control-label"></label>
                    <input id="name-input" type="text" name="name" placeholder="Enter Chairman Name...">
                    <button id="btn-input">
                        <i class="fas fa-arrow-right"></i>
                    </button>
            </div>  
            
            <div id="ch-searchbtn">
                <input class="ch-button-search" type="submit" value="Find You">
                <input class="ch-button-search" type="submit" value="Find In Map">
                <input class="ch-button-search" id="ch-button-3" type="submit" value=Development>
                           
            </div>

    </section>
    <!-------------- End Banner ---------------->
    
    <!--------------- Cbox2-Map ---------------->
    <section class="cbox2-map">
        <div class="cbox2-map-text">
            <div class="map-txt1">Search <span>Chairman</span> By Map</div>
            <div class="map-txt2">Chairmans <span>Got Most</span> Questions</div>
            <div class="map-txt3">Chairmans <span>Gave Most</span> Answers</div>
        </div>

        <div class="cbox2-inner-map">
            <div class="by-map"></div>
            <div class="most-questions">
                <div class="inner-most-questions">
                    
                   
                   <div class="table-part">
                        <table>
                            <thead>
                                <tr>
                                     
                                </tr>
                            </thead>

                            <tbody>

                                <?php


                                include 'backend/connection.php';

                                $selectquery = " select * from chairman_most_question ";

                                $query = mysqli_query($con, $selectquery);


                                $nums = mysqli_num_rows($query);

                                $res = mysqli_fetch_array($query);

                                while ($res = mysqli_fetch_array($query)) {

                                ?>
                                <tr>
                                 <td> <?php echo $res['content']; ?> </td>
                                 </tr>
                                <?php
                                }

                                ?>

                                
                            
                            </tbody>
                        </table>
                        
                    </div>
 

                </div>
                <button id="qus-btn">All Questions</button>
            </div>
            <div class="most-answers">
                <div class="inner-most-answers">
                    
                    <div class="table-part">
                        <table>
                            <thead>
                                <tr>
                                     
                                </tr>
                            </thead>

                            <tbody>

                                <?php


                                include 'backend/connection.php';

                                $selectquery = " select * from chairman_most_answer ";

                                $query = mysqli_query($con, $selectquery);


                                $nums = mysqli_num_rows($query);

                                $res = mysqli_fetch_array($query);

                                while ($res = mysqli_fetch_array($query)) {

                                ?>
                                <tr>
                                 <td> <?php echo $res['content']; ?> </td>
                                 </tr>
                                <?php
                                }

                                ?>

                                
                            
                            </tbody>
                        </table>
                        
                    </div>



                </div>
                <button id="ans-btn">LeaderBoard</button>
            </div>
        </div>
    </section>
    <!---------------- End Cbox2-Map ------------->

    <!---------------- Cbox3-Question ------------>
    <section class="cbox3-Question">
        <div class="cbox3-question-text">
            <div class="ques-txt1">Top <span>Questions</span> Updates</div>
            <div class="ques-txt2">Recent <span>Answers</span> Updates</div>
            <div class="ques-txt3">Recent <span>Development</span> Updates</div>
        </div>
        <div class="inner-Question">
            <div class="top-question">
                <div class="inner-top-question">
                    
                </div>
            </div>
            <div class="recent-answer">
                <div class="inner-recent-answer">
                    
                </div>
            </div>
            <div class="development">
                <div class="inner-development">
                    
                </div>
            </div>
        </div>
    </section>
    <!------------- End Cbox3-Question ----------->

    <!-------------- Cbox4-Question-Ch ----------->
    <section class="cbox4-Question-Ch">
        <div class="inner-Question-Ch">
            <div class="Questions">
                <h1>1560<span>+</span></h1> 
                <h4>Questions</h4>
            </div>
            <div class="Chairman">
                <h1>4562</h1> 
                <h4>Chairman</h4>
            </div>

            <div class="Answers">
                <h1>1560<span>+</span></h1> 
                <h4>Answers</h4>
            </div>
            <div class="Volunteers">
                <h1>1260<span>+</span></h1> 
                <h4>Volunteers</h4>
            </div>
        </div>
    </section>
    <!------------- End Cbox4-Question-Ch ---------->

    <!------------------ Cbox5-News ---------------->
     <section class="cbox5-news">
        <div class="news-txt">
            <div class="news">News</div>
            <div class="facebook">Facebook</div>
            <div class="youtube">Youtube</div>
        </div>
        
        <div class="inner-news">
            <div class="news-col-1">
                <div class="inner-news-col-1"></div>
            </div>
            <div class="news-col-2">
                <div class="inner-news-col-2"></div>
            </div>
            <div class="news-col-3">
                <div class="inner-news-col-3"></div>
            </div>
        </div>
    </section>
    <!--------------- End Cbox5-News --------------->

    <!---------------- Cbox6-Footer ---------------->
    <section class="cbox6-footer">
        <div class="footer">
            <div class="inner-footer">
                <div class="footer-logo">
                    <div class="gateway">
                        <h3>The gateway to your Chairman</h3>
                    </div>
                    <div class="contact-us">
                        <h3>Contact Us:</h3>
                        <p> Mirpur, Dhaka-1216, Bangladesh<br>
                        E-mail: srsaddamkhan@gmail.com<br>
                        Hotline: 01744-882708<br>
                        01842-824782 / 01912-313734</p>
                    </div>
                    
                </div>
                <div class="footer-about">
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">How to use the Site?</a></li>
                        <li><a href="#">Support BD Chairman</a></li>
                        <li><a href="#">Executives</a></li>
                        <li><a href="#">Activity Flow Chart</a></li>
                    </ul>
                </div>
                <div class="footer-ch-question">
                    <ul>
                        <li><a href="#">Chairmans</a></li>
                        <li><a href="#">All Questions</a></li>
                        <li><a href="#">All Answers</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Ambassadors</a></li>
                        <li><a href="#">Volunteers</a></li>
                        <li><a href="#">LeaderBoard</a></li>
                        <li><a href="#">Election Results</a></li>
                    </ul>
                </div>
                <div class="footer-social-logo">
                    <div class="social-logo">
                        <a href="https://www.facebook.com/srsaddamkhanbd"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://twitter.com/srsaddamkhan"><i class="fab fa-twitter-square"></i></a>
                        <a href="https://www.instagram.com/srsaddamkhanbd/"><i class="fab fa-instagram"></i></a> 
                        <a href="#"><i class="fab fa-youtube-square"></i></a>
                    </div>
                    <h4>Supported by <span>ICT Division</span></h4>
                    <div class="footer-ict">
                        <a href="#"><img src="img/footer-ict.png" width="300px" height="170px"></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer-copyright">
            <div><h4>Design Developed & Maintained by (S.R)</h4></div>
        </div>
    </section>
    <!--------------- End Cbox6-Footer ---------------->


    <!---------------JavaScript Link Up---------------->
    <!-- <script type="text/javascript" src="js/fontend.js"></script>  -->

    </body>
</html>