<template>
<app-layout>
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Country Create
        </h2>
    </template>

    <div class="py-12 px-3 md:px-32 lg:px-56">
        <div class="box row-span-3 ">
            <form class="p-4 border bg-white rounded-lg" @submit.prevent="submit">

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Select a country</label>
                    <select v-model="form.country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"> <option value="0" label="Select a country ... " selected="selected">Select a country ... </option>
                        <option value="United Kingdom" label="United Kingdom">United Kingdom</option>
                        <optgroup id="country-optgroup-Northern Europe" label="Northern Europe">
                            <option value="Denmark" label="Denmark">Denmark</option>
                            <option value="Estonia" label="Estonia">Estonia</option>
                            <option value="Faroe Islands" label="Faroe Islands">Faroe Islands</option>
                            <option value="Finland" label="Finland">Finland</option>
                            <option value="Guernsey" label="Guernsey">Guernsey</option>
                            <option value="Iceland" label="Iceland">Iceland</option>
                            <option value="Ireland" label="Ireland">Ireland</option>
                            <option value="Isle of Man" label="Isle of Man">Isle of Man</option>
                            <option value="Jersey" label="Jersey">Jersey</option>
                            <option value="Latvia" label="Latvia">Latvia</option>
                            <option value="Lithuania" label="Lithuania">Lithuania</option>
                            <option value="Norway" label="Norway">Norway</option>
                            <option value="Svalbard and Jan Mayen" label="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Sweden" label="Sweden">Sweden</option>
                            <option value="Åland Islands" label="Åland Islands">Åland Islands</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Western Europe" label="Western Europe">
                            <option value="AT" label="Austria">Austria</option>
                            <option value="BE" label="Belgium">Belgium</option>
                            <option value="DD" label="East Germany">East Germany</option>
                            <option value="FR" label="France">France</option>
                            <option value="DE" label="Germany">Germany</option>
                            <option value="LI" label="Liechtenstein">Liechtenstein</option>
                            <option value="LU" label="Luxembourg">Luxembourg</option>
                            <option value="FX" label="Metropolitan France">Metropolitan France</option>
                            <option value="MC" label="Monaco">Monaco</option>
                            <option value="NL" label="Netherlands">Netherlands</option>
                            <option value="CH" label="Switzerland">Switzerland</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Eastern Europe" label="Eastern Europe">
                            <option value="BY" label="Belarus">Belarus</option>
                            <option value="BG" label="Bulgaria">Bulgaria</option>
                            <option value="CZ" label="Czech Republic">Czech Republic</option>
                            <option value="HU" label="Hungary">Hungary</option>
                            <option value="MD" label="Moldova">Moldova</option>
                            <option value="PL" label="Poland">Poland</option>
                            <option value="RO" label="Romania">Romania</option>
                            <option value="RU" label="Russia">Russia</option>
                            <option value="SK" label="Slovakia">Slovakia</option>
                            <option value="UA" label="Ukraine">Ukraine</option>
                            <option value="SU" label="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Southern Europe" label="Southern Europe">
                            <option value="AL" label="Albania">Albania</option>
                            <option value="AD" label="Andorra">Andorra</option>
                            <option value="BA" label="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="HR" label="Croatia">Croatia</option>
                            <option value="GI" label="Gibraltar">Gibraltar</option>
                            <option value="GR" label="Greece">Greece</option>
                            <option value="IT" label="Italy">Italy</option>
                            <option value="MK" label="Macedonia">Macedonia</option>
                            <option value="MT" label="Malta">Malta</option>
                            <option value="ME" label="Montenegro">Montenegro</option>
                            <option value="PT" label="Portugal">Portugal</option>
                            <option value="SM" label="San Marino">San Marino</option>
                            <option value="RS" label="Serbia">Serbia</option>
                            <option value="CS" label="Serbia and Montenegro">Serbia and Montenegro</option>
                            <option value="SI" label="Slovenia">Slovenia</option>
                            <option value="ES" label="Spain">Spain</option>
                            <option value="VA" label="Vatican City">Vatican City</option>
                        </optgroup>

                        <optgroup id="country-optgroup-Australia and New Zealand" label="Australia and New Zealand">
                            <option value="AU" label="Australia">Australia</option>
                            <option value="NZ" label="New Zealand">New Zealand</option>
                            <option value="NF" label="Norfolk Island">Norfolk Island</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Caribbean" label="Caribbean">
                            <option value="AI" label="Anguilla">Anguilla</option>
                            <option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="AW" label="Aruba">Aruba</option>
                            <option value="BS" label="Bahamas">Bahamas</option>
                            <option value="BB" label="Barbados">Barbados</option>
                            <option value="VG" label="British Virgin Islands">British Virgin Islands</option>
                            <option value="KY" label="Cayman Islands">Cayman Islands</option>
                            <option value="CU" label="Cuba">Cuba</option>
                            <option value="DM" label="Dominica">Dominica</option>
                            <option value="DO" label="Dominican Republic">Dominican Republic</option>
                            <option value="GD" label="Grenada">Grenada</option>
                            <option value="GP" label="Guadeloupe">Guadeloupe</option>
                            <option value="HT" label="Haiti">Haiti</option>
                            <option value="JM" label="Jamaica">Jamaica</option>
                            <option value="MQ" label="Martinique">Martinique</option>
                            <option value="MS" label="Montserrat">Montserrat</option>
                            <option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="PR" label="Puerto Rico">Puerto Rico</option>
                            <option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
                            <option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="LC" label="Saint Lucia">Saint Lucia</option>
                            <option value="MF" label="Saint Martin">Saint Martin</option>
                            <option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                            <option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Central America" label="Central America">
                            <option value="BZ" label="Belize">Belize</option>
                            <option value="CR" label="Costa Rica">Costa Rica</option>
                            <option value="SV" label="El Salvador">El Salvador</option>
                            <option value="GT" label="Guatemala">Guatemala</option>
                            <option value="HN" label="Honduras">Honduras</option>
                            <option value="MX" label="Mexico">Mexico</option>
                            <option value="NI" label="Nicaragua">Nicaragua</option>
                            <option value="PA" label="Panama">Panama</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Central Asia" label="Central Asia">
                            <option value="KZ" label="Kazakhstan">Kazakhstan</option>
                            <option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="TJ" label="Tajikistan">Tajikistan</option>
                            <option value="TM" label="Turkmenistan">Turkmenistan</option>
                            <option value="UZ" label="Uzbekistan">Uzbekistan</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Channel Islands" label="Channel Islands">
                            <option value="GG" label="Guernsey">Guernsey</option>
                            <option value="JE" label="Jersey">Jersey</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Commonwealth of Independent States" label="Commonwealth of Independent States">
                            <option value="AM" label="Armenia">Armenia</option>
                            <option value="AZ" label="Azerbaijan">Azerbaijan</option>
                            <option value="BY" label="Belarus">Belarus</option>
                            <option value="GE" label="Georgia">Georgia</option>
                            <option value="KZ" label="Kazakhstan">Kazakhstan</option>
                            <option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="MD" label="Moldova">Moldova</option>
                            <option value="RU" label="Russia">Russia</option>
                            <option value="TJ" label="Tajikistan">Tajikistan</option>
                            <option value="TM" label="Turkmenistan">Turkmenistan</option>
                            <option value="UA" label="Ukraine">Ukraine</option>
                            <option value="UZ" label="Uzbekistan">Uzbekistan</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Eastern Africa" label="Eastern Africa">
                            <option value="BI" label="Burundi">Burundi</option>
                            <option value="KM" label="Comoros">Comoros</option>
                            <option value="DJ" label="Djibouti">Djibouti</option>
                            <option value="ER" label="Eritrea">Eritrea</option>
                            <option value="ET" label="Ethiopia">Ethiopia</option>
                            <option value="KE" label="Kenya">Kenya</option>
                            <option value="MG" label="Madagascar">Madagascar</option>
                            <option value="MW" label="Malawi">Malawi</option>
                            <option value="MU" label="Mauritius">Mauritius</option>
                            <option value="YT" label="Mayotte">Mayotte</option>
                            <option value="MZ" label="Mozambique">Mozambique</option>
                            <option value="RW" label="Rwanda">Rwanda</option>
                            <option value="RE" label="Réunion">Réunion</option>
                            <option value="SC" label="Seychelles">Seychelles</option>
                            <option value="SO" label="Somalia">Somalia</option>
                            <option value="TZ" label="Tanzania">Tanzania</option>
                            <option value="UG" label="Uganda">Uganda</option>
                            <option value="ZM" label="Zambia">Zambia</option>
                            <option value="ZW" label="Zimbabwe">Zimbabwe</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Eastern Asia" label="Eastern Asia">
                            <option value="CN" label="China">China</option>
                            <option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
                            <option value="JP" label="Japan">Japan</option>
                            <option value="MO" label="Macau SAR China">Macau SAR China</option>
                            <option value="MN" label="Mongolia">Mongolia</option>
                            <option value="KP" label="North Korea">North Korea</option>
                            <option value="KR" label="South Korea">South Korea</option>
                            <option value="TW" label="Taiwan">Taiwan</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Melanesia" label="Melanesia">
                            <option value="FJ" label="Fiji">Fiji</option>
                            <option value="NC" label="New Caledonia">New Caledonia</option>
                            <option value="PG" label="Papua New Guinea">Papua New Guinea</option>
                            <option value="SB" label="Solomon Islands">Solomon Islands</option>
                            <option value="VU" label="Vanuatu">Vanuatu</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Micronesian Region" label="Micronesian Region">
                            <option value="GU" label="Guam">Guam</option>
                            <option value="KI" label="Kiribati">Kiribati</option>
                            <option value="MH" label="Marshall Islands">Marshall Islands</option>
                            <option value="FM" label="Micronesia">Micronesia</option>
                            <option value="NR" label="Nauru">Nauru</option>
                            <option value="MP" label="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="PW" label="Palau">Palau</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Middle Africa" label="Middle Africa">
                            <option value="AO" label="Angola">Angola</option>
                            <option value="CM" label="Cameroon">Cameroon</option>
                            <option value="CF" label="Central African Republic">Central African Republic</option>
                            <option value="TD" label="Chad">Chad</option>
                            <option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
                            <option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
                            <option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="GA" label="Gabon">Gabon</option>
                            <option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Northern Africa" label="Northern Africa">
                            <option value="DZ" label="Algeria">Algeria</option>
                            <option value="EG" label="Egypt">Egypt</option>
                            <option value="LY" label="Libya">Libya</option>
                            <option value="MA" label="Morocco">Morocco</option>
                            <option value="SD" label="Sudan">Sudan</option>
                            <option value="TN" label="Tunisia">Tunisia</option>
                            <option value="EH" label="Western Sahara">Western Sahara</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Northern America" label="Northern America">
                            <option value="BM" label="Bermuda">Bermuda</option>
                            <option value="CA" label="Canada">Canada</option>
                            <option value="GL" label="Greenland">Greenland</option>
                            <option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="US" label="United States">United States</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Polynesia" label="Polynesia">
                            <option value="AS" label="American Samoa">American Samoa</option>
                            <option value="CK" label="Cook Islands">Cook Islands</option>
                            <option value="PF" label="French Polynesia">French Polynesia</option>
                            <option value="NU" label="Niue">Niue</option>
                            <option value="PN" label="Pitcairn Islands">Pitcairn Islands</option>
                            <option value="WS" label="Samoa">Samoa</option>
                            <option value="TK" label="Tokelau">Tokelau</option>
                            <option value="TO" label="Tonga">Tonga</option>
                            <option value="TV" label="Tuvalu">Tuvalu</option>
                            <option value="WF" label="Wallis and Futuna">Wallis and Futuna</option>
                        </optgroup>
                        <optgroup id="country-optgroup-South America" label="South America">
                            <option value="AR" label="Argentina">Argentina</option>
                            <option value="BO" label="Bolivia">Bolivia</option>
                            <option value="BR" label="Brazil">Brazil</option>
                            <option value="CL" label="Chile">Chile</option>
                            <option value="CO" label="Colombia">Colombia</option>
                            <option value="EC" label="Ecuador">Ecuador</option>
                            <option value="FK" label="Falkland Islands">Falkland Islands</option>
                            <option value="GF" label="French Guiana">French Guiana</option>
                            <option value="GY" label="Guyana">Guyana</option>
                            <option value="PY" label="Paraguay">Paraguay</option>
                            <option value="PE" label="Peru">Peru</option>
                            <option value="SR" label="Suriname">Suriname</option>
                            <option value="UY" label="Uruguay">Uruguay</option>
                            <option value="VE" label="Venezuela">Venezuela</option>
                        </optgroup>
                        <optgroup id="country-optgroup-South-Eastern Asia" label="South-Eastern Asia">
                            <option value="BN" label="Brunei">Brunei</option>
                            <option value="KH" label="Cambodia">Cambodia</option>
                            <option value="ID" label="Indonesia">Indonesia</option>
                            <option value="LA" label="Laos">Laos</option>
                            <option value="MY" label="Malaysia">Malaysia</option>
                            <option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
                            <option value="PH" label="Philippines">Philippines</option>
                            <option value="SG" label="Singapore">Singapore</option>
                            <option value="TH" label="Thailand">Thailand</option>
                            <option value="TL" label="Timor-Leste">Timor-Leste</option>
                            <option value="VN" label="Vietnam">Vietnam</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Southern Africa" label="Southern Africa">
                            <option value="BW" label="Botswana">Botswana</option>
                            <option value="LS" label="Lesotho">Lesotho</option>
                            <option value="NA" label="Namibia">Namibia</option>
                            <option value="ZA" label="South Africa">South Africa</option>
                            <option value="SZ" label="Swaziland">Swaziland</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Southern Asia" label="Southern Asia">
                            <option value="AF" label="Afghanistan">Afghanistan</option>
                            <option value="BD" label="Bangladesh">Bangladesh</option>
                            <option value="BT" label="Bhutan">Bhutan</option>
                            <option value="IN" label="India">India</option>
                            <option value="IR" label="Iran">Iran</option>
                            <option value="MV" label="Maldives">Maldives</option>
                            <option value="NP" label="Nepal">Nepal</option>
                            <option value="PK" label="Pakistan">Pakistan</option>
                            <option value="LK" label="Sri Lanka">Sri Lanka</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Western Africa" label="Western Africa">
                            <option value="BJ" label="Benin">Benin</option>
                            <option value="BF" label="Burkina Faso">Burkina Faso</option>
                            <option value="CV" label="Cape Verde">Cape Verde</option>
                            <option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
                            <option value="GM" label="Gambia">Gambia</option>
                            <option value="GH" label="Ghana">Ghana</option>
                            <option value="GN" label="Guinea">Guinea</option>
                            <option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="LR" label="Liberia">Liberia</option>
                            <option value="ML" label="Mali">Mali</option>
                            <option value="MR" label="Mauritania">Mauritania</option>
                            <option value="NE" label="Niger">Niger</option>
                            <option value="NG" label="Nigeria">Nigeria</option>
                            <option value="SH" label="Saint Helena">Saint Helena</option>
                            <option value="SN" label="Senegal">Senegal</option>
                            <option value="SL" label="Sierra Leone">Sierra Leone</option>
                            <option value="TG" label="Togo">Togo</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Western Asia" label="Western Asia">
                            <option value="AM" label="Armenia">Armenia</option>
                            <option value="AZ" label="Azerbaijan">Azerbaijan</option>
                            <option value="BH" label="Bahrain">Bahrain</option>
                            <option value="CY" label="Cyprus">Cyprus</option>
                            <option value="GE" label="Georgia">Georgia</option>
                            <option value="IQ" label="Iraq">Iraq</option>
                            <option value="IL" label="Israel">Israel</option>
                            <option value="JO" label="Jordan">Jordan</option>
                            <option value="KW" label="Kuwait">Kuwait</option>
                            <option value="LB" label="Lebanon">Lebanon</option>
                            <option value="NT" label="Neutral Zone">Neutral Zone</option>
                            <option value="OM" label="Oman">Oman</option>
                            <option value="PS" label="Palestinian Territories">Palestinian Territories</option>
                            <option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
                            <option value="QA" label="Qatar">Qatar</option>
                            <option value="SA" label="Saudi Arabia">Saudi Arabia</option>
                            <option value="SY" label="Syria">Syria</option>
                            <option value="TR" label="Turkey">Turkey</option>
                            <option value="AE" label="United Arab Emirates">United Arab Emirates</option>
                            <option value="YE" label="Yemen">Yemen</option>
                        </optgroup></select>
                </div>
                <div class="mb-6">
                    <button type="submit" class="w-full rounded-full bg-blue-500 px-5 py-3 text-base mb-3 font-medium text-white transition duration-200 hover:bg-blue-600 active:bg-blue-700">
                        Create
                    </button>
                </div>

            </form>
        </div>
    </div>
</app-layout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import {router, useForm} from "@inertiajs/vue3";

const form = useForm({
    country: '',
})
const submit = () => {
    form.post(route('countries.store'));
}
</script>

<style scoped>

</style>
