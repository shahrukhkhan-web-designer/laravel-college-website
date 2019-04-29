<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span id="closeIcon" class="close" data-dismiss="modal">&times;</span>
        <div class="row">
            <div class="col-md-5">
                <div class="popUpLeft">

{{--                    <h2>How It Works</h2>--}}

                    <ul >
                        <li >
                            <span class="rouded-bullets">1</span>
                            <a href="tel:+919999127629">+91 9999127633</a>
                        </li>
                        <li >
                            <span class="rouded-bullets">2</span>
                            <a href="tel:+919999127633">info@vinayana.in</a>

                        </li>
{{--                        <li >--}}
{{--                            <span class="rouded-bullets">3</span>--}}
{{--                            <a href="tel:+919999127651">+91 9999127651</a>--}}

{{--                        </li>--}}
                    </ul>



                    <div class="modalCall">
                        <hr>
                        <p><i class="fa fa-phone"></i>Call Us for details</p>
                        <a href="tel:+919999127629"><h2>+91 9999127633</h2></a>

                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div id="success" class="alert alert-success mt-5">
                    Successfully submitted data
                </div>

                <div class="popUpContent">
                    <form id="enquiry-form" method="post">
                    <input type="hidden" value="{{csrf_token()}}" name="_token">
                        <div class="inner-addon left-addon">
                            <i class="fa fa-user"></i>
                            <input name="name" id="a-name" type="text" class="form-control" placeholder="Name" />
                        </div>

                        <div class="inner-addon left-addon">
                            <i class="fa fa-envelope"></i>
                            <input name="email" id="a-email" type="email" class="form-control" placeholder="Email" />
                        </div>


                        <div class="inner-addon left-addon">
                            <i class="fa fa-phone"></i>
                            <input name="phone" id="a-phone" type="text" class="form-control" placeholder="Phone" />
                        </div>

                        <div class="inner-addon left-addon">
                            <i class="fa fa-certificate"></i>

                                <select name="course" id="a-courses" class="form-control select_field_label"  name="course_tag" required="">
                                    <option value="" disabled="disabled" selected="selected">Select</option>
                                    <optgroup label="Popular Courses">
                                        <option class="course_group"  value="BE/B.Tech">BE/B.Tech</option>
                                        <option class="course_group"  value="MBA/PGDM">MBA/PGDM</option>
                                        <option class="course_group"  value="BBA/BBM">BBA/BBM</option>
                                        <option class="course_group"  value="B.Com">B.Com</option>
                                        <option class="course_group"  value="BA">BA</option>
                                        <option class="course_group"  value="MA">MA</option>
                                        <option class="course_group"  value="MBBS">MBBS</option>
                                        <option class="course_group"  value="BCA">BCA</option>
                                        <option class="course_group"  value="MCA">MCA</option>
                                        <option class="course_group"  value="ME/M.Tech">ME/M.Tech</option>
                                        <option class="course_group"  value="B.Sc">B.Sc</option>
                                        <option class="course_group"  value="M.Sc">M.Sc</option>
                                    </optgroup>
                                    <optgroup label="Top Courses">
                                        <option class="course_tag_names"  value="BMM" >BMM</option>
                                        <option class="course_tag_names"  value="M.Com" >M.Com</option>
                                    </optgroup>
                                    <optgroup label="Bachelor">
                                        <option class="course_group"  value="Bachelors (Animation &amp; Graphic Design)">Bachelors (Animation &amp; Graphic Design)</option>
                                        <option class="course_group"  value="BHM">BHM</option>
                                        <option class="course_group"  value="BVSc">BVSc</option>
                                        <option class="course_group"  value="BBA (Aviation)">BBA (Aviation)</option>
                                        <option class="course_group"  value="B.P.Ed">B.P.Ed</option>
                                        <option class="course_group"  value="LLB">LLB</option>
                                        <option class="course_group"  value="BFA">BFA</option>
                                        <option class="course_group"  value="BUMS">BUMS</option>
                                        <option class="course_group"  value="Bachelor of Physiotherapy(BPT)">Bachelor of Physiotherapy(BPT)</option>
                                        <option class="course_group"  value="B.Planning">B.Planning</option>
                                        <option class="course_group"  value="BHMS">BHMS</option>
                                        <option class="course_group"  value="BDS">BDS</option>
                                        <option class="course_group"  value="B.Arch">B.Arch</option>
                                        <option class="course_group"  value="B.Des">B.Des</option>
                                        <option class="course_group"  value="B.Ed">B.Ed</option>
                                        <option class="course_group"  value="B.Pharm">B.Pharm</option>
                                        <option class="course_group"  value="B.Sc (Agriculture)">B.Sc (Agriculture)</option>
                                        <option class="course_group"  value="B.Sc (Aviation)">B.Sc (Aviation)</option>
                                        <option class="course_group"  value="B.Sc (Computers)">B.Sc (Computers)</option>
                                        <option class="course_group"  value="B.Sc (Medicine)">B.Sc (Medicine)</option>
                                        <option class="course_group"  value="B.Sc (Nursing)">B.Sc (Nursing)</option>
                                        <option class="course_group"  value="Bachelors in Vocational Courses">Bachelors in Vocational Courses</option>
                                        <option class="course_group"  value="BAMS">BAMS</option>
                                    </optgroup>
                                    <optgroup label="Masters">
                                        <option class="course_group"  value="MVSc">MVSc</option>
                                        <option class="course_group"  value="MS">MS</option>
                                        <option class="course_group"  value="MMC">MMC</option>
                                        <option class="course_group"  value="MHM">MHM</option>
                                        <option class="course_group"  value="M.Ed">M.Ed</option>
                                        <option class="course_group"  value="M.Ch">M.Ch</option>
                                        <option class="course_group"  value="M.Arch">M.Arch</option>
                                        <option class="course_group"  value="LLM">LLM</option>
                                        <option class="course_group"  value="MHA">MHA</option>
                                        <option class="course_group"  value="M.P.Ed">M.P.Ed</option>
                                        <option class="course_group" value="Executive MBA">Executive MBA</option>
                                        <option class="course_group"  value="MDS">MDS</option>
                                        <option class="course_group"  value="M.Phil in Agriculture">M.Phil in Agriculture</option>
                                        <option class="course_group"  value="M.Planning">M.Planning</option>
                                        <option class="course_group"  value="M.Sc (Agriculture)">M.Sc (Agriculture)</option>
                                        <option class="course_group"  value="M.Sc (Aviation)">M.Sc (Aviation)</option>
                                        <option class="course_group"  value="M.Sc (Hotel Management)">M.Sc (Hotel Management)</option>
                                        <option class="course_group" value="M.Sc (Medicine)">M.Sc (Medicine)</option>
                                        <option class="course_group"  value="M.Sc (Nursing)">M.Sc (Nursing)</option>
                                        <option class="course_group"  value="Master of Physiotherapy(MPT)">Master of Physiotherapy(MPT)</option>
                                        <option class="course_group"  value="Masters in Vocational Courses">Masters in Vocational Courses</option>
                                        <option class="course_group"  value="M.Pharm">M.Pharm</option>
                                        <option class="course_group"  value="M.Des">M.Des</option>
                                    </optgroup>
                                    <optgroup label="Doctorate">
                                        <option class="course_group"  value="M.Phil/Ph.D in Management">M.Phil/Ph.D in Management</option>
                                        <option class="course_group"  value="M.Phil/Ph.D in Law">M.Phil/Ph.D in Law</option>
                                        <option class="course_group" value="M.Phil/Ph.D in Hotel Management">M.Phil/Ph.D in Hotel Management</option>
                                        <option class="course_group"  value="M.Phil/Ph.D in Mass Communication">M.Phil/Ph.D in Mass Communication</option>
                                        <option class="course_group"  value="M.Phil/Ph.D in Medicine">M.Phil/Ph.D in Medicine</option>
                                        <option class="course_group"  value="M.Phil/Ph.D in Paramedical">M.Phil/Ph.D in Paramedical</option>
                                        <option class="course_group"  value="M.Phil/Ph.D in Pharmacy">M.Phil/Ph.D in Pharmacy</option>
                                        <option class="course_group"  value="M.Phil/Ph.D in Science">M.Phil/Ph.D in Science</option>
                                        <option class="course_group"  value="MD">MD</option>
                                        <option class="course_group"  value="M.Phil/Ph.D in Engineering">M.Phil/Ph.D in Engineering</option>
                                        <option class="course_group"  value="Ph.D in Veterinary Science">Ph.D in Veterinary Science</option>
                                        <option class="course_group"  value="D.Litt">D.Litt</option>
                                        <option class="course_group"  value="LLD">LLD</option>
                                        <option class="course_group"  value="M.Phil/Ph.D in Education">M.Phil/Ph.D in Education</option>
                                        <option class="course_group"  value="M.Phil/Ph.D in Agriculture">M.Phil/Ph.D in Agriculture</option>
                                        <option class="course_group"  value="M.Phil/Ph.D in Architecture">M.Phil/Ph.D in Architecture</option>
                                        <option class="course_group"  value="M.Phil/Ph.D in Arts">M.Phil/Ph.D in Arts</option>
                                        <option class="course_group"  value="M.Phil/Ph.D in Commerce">M.Phil/Ph.D in Commerce</option>
                                        <option class="course_group"  value="M.Phil/Ph.D in Design">M.Phil/Ph.D in Design</option>
                                        <option class="course_group"  value="M.Phil/Ph.D in Dental">M.Phil/Ph.D in Dental</option>
                                        <option class="course_group"  value="M.Phil/Ph.D in Computer Applications">M.Phil/Ph.D in Computer Applications</option>
                                        <option value="Other">Other</option>
                                    </optgroup>
                                </select>

                        </div>
                        <div class="inner-addon left-addon">
                            <i class="fa fa-comments-o"></i>
                            <textarea  name="message" id="a-message" rows="4" placeholder="Message" class="form-control"></textarea>

                        </div>

                        <input type="submit" value="Submit" class="form-control">

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>