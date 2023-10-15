<div class="container-fluid" id="customer-list">

    <ul class="nav nav-tabs" id="tab-link2" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="tab-general-link2" data-toggle="pill" href="#tab-general2" role="tab"
                aria-controls="tab-general2" aria-selected="true">
                <i class="far fa-star"></i> Module</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="bt-address2" data-toggle="pill" href="#tab-address2" role="tab"
                aria-controls="tab-address2" aria-selected="false">
                <i class="far fa-map"></i> Model</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab-contact-link2" data-toggle="pill" href="#tab-contact2" role="tab"
                aria-controls="tab-contact2" aria-selected="false">
                <i class="fas fa-users"></i> View</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="bt-special2" data-toggle="pill" href="#tab-special2" role="tab"
                aria-controls="tab-special2" aria-selected="false">
                <i class="fa fa-cog"></i> Controller</a>
        </li>
    </ul>
    <div class="tab-content" id="tab-content2">
        <div class="tab-pane fade active show" id="tab-general2" role="tabpanel" aria-labelledby="tab-general-link2">
            <div class="card">
                <form action="api/index.php?m=company&a=update" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <div class="card-header bg-light-gray">
                        <span class="card-title" data-card-widget="collapse"> ข้อมูลบริษัท</span>
                        <button type="submit" class="btn btn-success float-right"
                            style="margin-right:6px;">บันทึกการตั้งค่า</a>
                    </div>
                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-2">
                                <img src="dist/img/logo.png" class="img-fluid rounded img-thumbnail"
                                    alt="Responsive image">
                                <span class="btn-block btn btn-primary" style="margin-top:6px;">อัพโหลด
                                    เครื่องหมายการค้า</span>
                            </div>
                            <div class="col">

                                <div class="row" id="corporate">
                                    <div class="col-sm">
                                        <label>Company</label>
                                        <input type="text" name="company_en" class="form-control"
                                            value="<?php echo $company_english; ?>" required="">
                                        <div class="valid-feedback">ผ่าน</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div class="col-sm">
                                        <label>บริษัท</label>
                                        <input type="text" name="company_th" class="form-control"
                                            value="<?php echo $company_thai; ?>" required="">
                                        <div class="valid-feedback">ผ่าน</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <label>อธิบาย (แบบย่อ)</label>
                                        <textarea name="description" class="form-control" required="" rows="5"
                                            contenteditable>บริษัท ฟอร์ซ เครน จำกัด  ดำเนินธุรกิจเกี่ยวกับ การผลิต, ติดตั้ง เครนไฟฟ้า โครงสร้างเครน พร้อมติดตั้ง และ ออกแบบ ด้วย
ความเชี่ยวชาญและประสบการณ์ การทำงาน โดย ทีมงานวิศวกร ผู้เชี่ยวชาญในการทำงานมากกว่า 10 ปี
และ ยังคำนึงถึงความต้องการของลูกค้า และ ความปลอดภัยเป็นหลักสำคัญอย่างยิ่ง พร้อมด้วยบริการที่ดีเยี่ยม และ ราคาที่สมเหตุสมผล
นอกจากนี้เรายังจำหน่ายสินค้าหลายอย่าง เช่น รอกสลิงไฟฟ้า, รอกโซ่ไฟฟ้า, เครนไฟฟ้า, C-Track System, Conductor Rail, Overload Protector, สายไฟ และ อุปกรณ์ในการประกอบเครน ต่างๆ
                                </textarea>
                                        <div class="valid-feedback">ผ่าน</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm">
                                        <label>เลขที่ผู้เสียภาษี</label>
                                        <input type="text" name="tax_identification" placeholder="0-0000-00000-00-0"
                                            value="<?php echo $tax_identification; ?>" class="form-control">
                                    </div>
                                    <div class="col-sm">
                                        <label>เลขทะเบียนพาณิชย์อิเล็กทรอนิกส์ 13 หลัก</label>
                                        <input type="text" name="elec_identification" placeholder="0-0000-00000-00-0"
                                            class="form-control ">
                                        <div class="valid-feedback">ผ่าน</div>
                                        <div class="invalid-feedback">กรอกข้อมูลนี้.</div>
                                    </div>
                                </div>

                                <div class="form-row">

                                    <div class="col-4">
                                        <label>ก่อตั้งเมื่อ</label>

                                        <div class="input-group date" id="pickday" data-target-input="nearest">
                                            <input type="text" name="birth" class="form-control datetimepicker-input"
                                                data-target="#pickday" placeholder="dd/mm/yyyy"
                                                data-provide="datepicker" data-date-language="th-th"
                                                data-inputmask="&quot;mask&quot;: &quot;99/99/9999&quot;" data-mask=""
                                                required="" value="<?php 
                                        if($birth!=''){
                                            $y= date("Y",strtotime($birth))+543;
                                            $m= date("m",strtotime($birth));
                                            $d= date("d",strtotime($birth));
                                            $datec = "$d/$m/$y";
                                        }
                                        echo $datec; ?>">
                                            <div class="input-group-append" data-target="#pickday"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                            <div class="valid-feedback">ผ่าน</div>
                                            <div class="invalid-feedback">กรอกข้อมูลนี้.</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <p>


                        <div class="form-row">
                            <div class="col-4">
                                <label><i class="fas fa-mobile-alt"></i> เบอร์โทร มือถือ</label>
                                <input type="text" name="mobilephone" class="form-control" placeholder="00-0000-0000"
                                    value="<?php echo $mobilephone; ?>" required="">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="col-4">
                                <label><i class="fas fa-phone-square"></i> เบอร์โทร ที่ทำงาน</label>
                                <input type="text" name="workphone" placeholder="0-0000-0000"
                                    value="<?php echo $workphone; ?>" class="form-control ">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                        </div>

                        <p>


                        <p>
                        <div class="form-row">
                            <div class="col-4">
                                <label><i class="far fa-envelope"></i> อีเมล</label>
                                <input type="text" name="email1" placeholder="example@netcom.com" value=""
                                    class="form-control ">
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="col-4">
                                <label><i class="fab fa-line"></i> Line</label>
                                <input type="text" name="line" value="" class="form-control ">
                            </div>
                        </div>

                    </div>
                    <div class="card-footer"></div>
                </form>
            </div>

        </div>
        <div class="tab-pane fade" id="tab-address2" role="tabpanel" aria-labelledby="tab-address-link2">

            <div class="card ">
                <div class="card-header bg-light-gray">
                    <span class="card-title" data-card-widget="collapse"><i class="far fa-id-card"></i> ที่อยู่
                        ตามทะเบียน</span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                class="fas fa-expand"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <input type="hidden" name="aid2" value="" autocomplete="off">
                    <div class="form-row">
                        <div class="col-2">
                            <label>บ้านเลขที่</label>
                            <input type="text" name="house2" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-2">
                            <label>ห้อง</label>
                            <input type="text" name="room2" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-2">
                            <label>ชั้น</label>
                            <input type="text" name="floor2" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-3">
                            <label>อาคาร</label>
                            <input type="text" name="building2" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-3">
                            <label>โครงการ</label>
                            <input type="text" name="project2" class="form-control form-control-sm" value="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-2">
                            <label>หมู่</label>
                            <input type="text" name="moo2" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-4">
                            <label>หมู่บ้าน</label>
                            <input type="text" name="village2" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-3">
                            <label>ซอย</label>
                            <input type="text" name="soi2" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-3">
                            <label>ถนน</label>
                            <input type="text" name="road2" class="form-control form-control-sm" value="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-3">
                            <label>จังหวัด </label>
                            <input type="text" name="city2" class="form-control form-control-sm" value="">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="col-3">
                            <label>อำเภอ</label>
                            <input type="text" name="amphur2" class="form-control form-control-sm" value="">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="col-3">
                            <label>ตำบล</label>
                            <input type="text" name="district2" class="form-control form-control-sm" value="">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="col-3">
                            <label>รหัสไปรษณ๊ย์</label>
                            <input type="text" name="zipcode2" class="form-control form-control-sm" value="">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>


            <div class="card ">
                <div class="card-header bg-light-gray">
                    <span class="card-title" data-card-widget="collapse"><i class="fas fa-briefcase"></i> ที่อยู่
                        จัดส่งเอกสาร</span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                class="fas fa-expand"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <input type="hidden" name="aid3" value="" autocomplete="off">
                    <div class="form-row">
                        <div class="col-2">
                            <label>บ้านเลขที่</label>
                            <input type="text" name="house3" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-2">
                            <label>ห้อง</label>
                            <input type="text" name="room3" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-2">
                            <label>ชั้น</label>
                            <input type="text" name="floor3" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-3">
                            <label>อาคาร</label>
                            <input type="text" name="building3" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-3">
                            <label>โครงการ</label>
                            <input type="text" name="project3" class="form-control form-control-sm" value="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-2">
                            <label>หมู่</label>
                            <input type="text" name="moo3" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-4">
                            <label>หมู่บ้าน</label>
                            <input type="text" name="village3" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-3">
                            <label>ซอย</label>
                            <input type="text" name="soi3" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-3">
                            <label>ถนน</label>
                            <input type="text" name="road3" class="form-control form-control-sm" value="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-3">
                            <label>จังหวัด </label>
                            <input type="text" name="city3" class="form-control form-control-sm" value="">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="col-3">
                            <label>อำเภอ</label>
                            <input type="text" name="amphur3" class="form-control form-control-sm" value="">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="col-3">
                            <label>ตำบล</label>
                            <input type="text" name="district3" class="form-control form-control-sm" value="">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="col-3">
                            <label>รหัสไปรษณ๊ย์</label>
                            <input type="text" name="zipcode3" class="form-control form-control-sm" value="">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>


            <div class="card ">
                <div class="card-header bg-light-gray">
                    <span class="card-title" data-card-widget="collapse"><i class="fas fa-truck"></i> ที่อยู่
                        จัดส่งสินค้า</span>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                class="fas fa-expand"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <input type="hidden" name="aid4" value="" autocomplete="off">
                    <div class="form-row">
                        <div class="col-2">
                            <label>บ้านเลขที่</label>
                            <input type="text" name="house4" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-2">
                            <label>ห้อง</label>
                            <input type="text" name="room4" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-2">
                            <label>ชั้น</label>
                            <input type="text" name="floor4" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-3">
                            <label>อาคาร</label>
                            <input type="text" name="building4" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-3">
                            <label>โครงการ</label>
                            <input type="text" name="project4" class="form-control form-control-sm" value="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-2">
                            <label>หมู่</label>
                            <input type="text" name="moo4" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-4">
                            <label>หมู่บ้าน</label>
                            <input type="text" name="village4" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-3">
                            <label>ซอย</label>
                            <input type="text" name="soi4" class="form-control form-control-sm" value="">
                        </div>
                        <div class="col-3">
                            <label>ถนน</label>
                            <input type="text" name="road4" class="form-control form-control-sm" value="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-3">
                            <label>จังหวัด </label>
                            <input type="text" name="city4" class="form-control form-control-sm" value="">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="col-3">
                            <label>อำเภอ</label>
                            <input type="text" name="amphur4" class="form-control form-control-sm" value="">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="col-3">
                            <label>ตำบล</label>
                            <input type="text" name="district4" class="form-control form-control-sm" value="">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="col-3">
                            <label>รหัสไปรษณ๊ย์</label>
                            <input type="text" name="zipcode4" class="form-control form-control-sm" value="">
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-contact2" role="tabpanel" aria-labelledby="tab-contact-link2">

            <p>

            <div class="card">
                <div class="card-header bg-light-gray">
                    <span class="card-title" data-card-widget="collapse"> รายชื่อติดต่อ</span>
                </div>
                <div class="card-body" style="display: block;">




                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                            <div class="card bg-light d-flex flex-fill">
                                <div class="card-header text-muted border-bottom-0">
                                    Sale Manager
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>สายชล แจ้งเกิดผล</b></h2>
                                            <p class="text-muted "><b>แผนก : </b> จัดซื้อ</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">

                                                <li><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                                    Phone #: 084-536-2174</li>
                                                <li><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span>
                                                    E-mail #: aaaa@aaa.com</li>
                                                <li><span class="fa-li"><i class="fab fa-line"></i></span>
                                                    Line #: @klinn</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="dist/img/avatar.png" alt="user-avatar"
                                                class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                            <i class="fas fa-comments"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> View Profile
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                            <div class="card bg-light d-flex flex-fill">
                                <div class="card-header text-muted border-bottom-0">
                                    Sale Manager
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>สายชล แจ้งเกิดผล</b></h2>
                                            <p class="text-muted "><b>แผนก : </b> จัดซื้อ</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">

                                                <li><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                                    Phone #: 084-536-2174</li>
                                                <li><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span>
                                                    E-mail #: aaaa@aaa.com</li>
                                                <li><span class="fa-li"><i class="fab fa-line"></i></span>
                                                    Line #: @klinn</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="dist/img/avatar.png" alt="user-avatar"
                                                class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                            <i class="fas fa-comments"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> View Profile
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                            <div class="card bg-light d-flex flex-fill">
                                <div class="card-header text-muted border-bottom-0">
                                    Sale Manager
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>สายชล แจ้งเกิดผล</b></h2>
                                            <p class="text-muted "><b>แผนก : </b> จัดซื้อ</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">

                                                <li><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                                    Phone #: 084-536-2174</li>
                                                <li><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span>
                                                    E-mail #: aaaa@aaa.com</li>
                                                <li><span class="fa-li"><i class="fab fa-line"></i></span>
                                                    Line #: @klinn</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="dist/img/avatar.png" alt="user-avatar"
                                                class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                            <i class="fas fa-comments"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> View Profile
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>

                </div>
            </div>


        </div>
        <div class="tab-pane fade" id="tab-special2" role="tabpanel" aria-labelledby="tab-special-link2">


            <div class="card">
                <div class="card-header bg-light-gray">
                    <span class="card-title" data-card-widget="collapse"> สถานะผู้บริโภค</span>
                </div>
                <div class="card-body" style="display: block;">

                    <p>
                    <h3>Documents file</h3>
                    <ul>
                        <li>ภพ 20</li>
                        <li>สำเนาบัตรประชาชน </li>
                        <li>ใบรับรองบริษัท </li>
                        <li>อื่น ๆ </li>
                    </ul>
                    </p>

                    <p>
                    <h3>Policy</h3>
                    <ul>
                        <li>Payment</li>
                        <li>Cradit</li>
                        <li>Rating</li>
                        <li>หนี้สิน</li>
                    </ul>
                    </p>


                </div>
            </div>
        </div>
    </div>
</div>


<script>
var selectedScheme = 'corporate';

$('#businessType').change(function() {

    selectedScheme = $(this).val();
    if (selectedScheme == 'corporate') {
        $('#individual').css('display', 'none');
        $('#corporate').css('display', 'block');
    } else {
        $('#individual').css('display', 'block');
        $('#corporate').css('display', 'none');
    }
});
</script>

</div>

</div>

<script>
new Vue({
    el: '#customer-list',
    data: {
        customers: null
    },
    data: {
        gClass: 'bg-success'
    },
    created: function() {
        fetch("api/customers.php")
            .then(r => r.json())
            .then(json => {
                this.customers = json;
            });

        let uri = window.location.search.substring(1);
        let params = new URLSearchParams(uri);
        this.customerid = params.get("id");

    }
})
</script>