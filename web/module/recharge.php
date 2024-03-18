<?php
//Form nạp thẻ
define('VinhCacDai20CM',true);
include("../config.php");
if(!isset($_SESSION['user'])){
	include_once 'login.php';
	die();
}
?>                                          <div class="container">
    <div class="content">
        <div class="history-content">
            <div class="bx-history">
                <div class="box">
                    <div class="box-tab">
                        <ul class="nav nav-sub " role="tablist">
                            <li role="presentation" class="active">
                                <a href="#history-cart" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">
                                    Thẻ cào điện thoại
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#history-recharge" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img src="https://lh3.googleusercontent.com/hRq2DVKkzBXQkyftxr0e2ytl0fS2hEWx3UTe3V652RfJVYWqVRGgBNhmZgqNzJ8PKHE" style="width:20px"><font color="#008800"> C.Khoản<sub>+20%</sub></font>
                                </a>
                            </li>
							<!--li role="presentation" class="">
                                <a href="#history-momo" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img src="https://lh3.ggpht.com/in55ErbUyvlsNBV2L7XhnixUgt7erBPyJiuE-svftXaM7SZSFr2xdcZyf3ruR6w4Zwpc=w300" style="width:20px"><font color="#CC0099"> Momo<sub>+20%</sub></font>
                                </a>
                            </li-->
                            <li role="presentation" class="">
                                <a href="#history-buy-appota-card" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">
                                    Lịch sử giao dịch
                                </a>
                            </li>
							<li role="presentation" class="">
                                <a href="#history-buy-appota-vnd" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">
                                    Lịch sử VNĐ
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="box-body tab-content">
                        <div role="tabpanel" class="tab-pane active" id="history-cart">
                            <div class="alert alert-warning" role="alert">
                                <span style="color: #0000ff;">
                                    <strong style="color: #0c5460;">
                                        Chú ý: Nạp thẻ không đúng mệnh giá chúng tôi sẽ không
                                        chịu trách nhiệm nếu bạn không nhận được VND trong web!
                                    </strong><br>
                                    <font color="#0c5460">- Bắt đầu duyệt thẻ từ 8h đến 24h thẻ sẽ được tự động xử lý và cộng trực tiếp vào tài khoản.
                                       (Chuyển khoản duyệt 24/7)</font><br>
									<font color="#0c5460">- Nếu bạn gặp vấn đề về nạp thẻ hoặc chuyển khoản, vui lòng liên hệ Fanpage để được hỗ trợ..</font><br>
										<font color="#0c5460">- Khuyến khích <b><font color="#008800"> Chuyển khoản ATM </font>  hoặc <font color="#CC0099"> MOMO</font></b> để được KHUYẾN MÃI 20% , số tiền chuyển tối thiểu 100.000 VNĐ trở lên.</font><br>
										<!--font color="#0c5460">- Nên dùng thẻ <font color="#CC0099"><b> ZingXu</b></font> nạp để được duyệt nhanh chóng.</font><br-->
										
                                </span>
                            </div>

                            <form method="post" accept-charset="utf-8" id="recharge-telco" novalidate="novalidate" class="bv-form"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                <div class="form-group">
                                    <div class="input-field">
                                        <label><span>Loại thẻ cào</span></label>
                                        <select name="typecard" id="typecard" class="form-control" data-bv-field="typecard" style="display: none;">
                                            <option value="1" selected="">Viettel</option>
                                            <option value="2">Vinaphone</option>
                                            <option value="3">Mobiphone</option>
                                            <option value="6">Thẻ Zing</option>
                                        </select><div class="nice-select form-control" tabindex="0"><span class="current">Viettel</span><ul class="list"><li data-value="1" class="option selected">Viettel</li><li data-value="2" class="option">Vinaphone</li><li data-value="3" class="option">Mobiphone</li><li data-value="6" class="option">Thẻ Zing</li></ul></div>
                                    </div>
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="typecard" data-bv-result="NOT_VALIDATED" style="display: none;">Vui lòng chọn loại thẻ</small></div>
                                <div class="form-group">
                                    <div class="input-field">
                                        <label><span>Mệnh giá thẻ</span></label>
                                        <select name="cardmoney" id="cardmoney" class="form-control" data-bv-field="cardmoney" style="display: none;">
                                            <option value="">-- Chọn mệnh giá --</option>
											<option value="20000">20,000 VNĐ</option>
                                            <option value="50000">50,000 VNĐ</option>
                                            <option value="100000">100,000 VNĐ</option>
                                            <option value="200000">200,000 VNĐ</option>
                                            <option value="300000">300,000 VNĐ</option>
                                            <option value="500000">500,000 VNĐ</option>
                                            <option value="1000000">1,000,000 VNĐ</option>
                                        </select><div class="nice-select form-control" tabindex="0"><span class="current">-- Chọn mệnh giá --</span><ul class="list"><li data-value="" class="option selected">-- Chọn mệnh giá --</li><li data-value="20000" class="option">20,000 VNĐ</li><li data-value="50000" class="option">50,000 VNĐ</li><li data-value="100000" class="option">100,000 VNĐ</li><li data-value="200000" class="option">200,000 VNĐ</li><li data-value="300000" class="option">300,000 VNĐ</li><li data-value="500000" class="option">500,000 VNĐ</li><li data-value="1000000" class="option">1,000,000 VNĐ</li></ul></div>
                                    </div>
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="cardmoney" data-bv-result="NOT_VALIDATED" style="display: none;">Vui lòng chọn mệnh giá</small></div>
                                <div class="form-group">
                                    <div class="input-field">
                                        <label class="placeholder"><span>Mã thẻ cào</span></label>
                                        <input type="text" name="passcard" id="passcard" class="form-control" data-bv-field="passcard">
                                    </div>
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="passcard" data-bv-result="NOT_VALIDATED" style="display: none;">Vui lòng nhập mã thẻ</small></div>
                                <div class="form-group">
                                    <div class="input-field">
                                        <label class="placeholder"><span>Số Serial</span></label>
                                        <input type="text" name="serialcard" id="serialcard" class="form-control" data-bv-field="serialcard">
                                    </div>
                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="serialcard" data-bv-result="NOT_VALIDATED" style="display: none;">Vui lòng nhập số serial</small></div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block" id="signin-button">
                                        Nạp thẻ
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="history-recharge">
						<div class="alert alert-warning" role="alert">
						<span style="color: #0c5460;"> <i class="fa fa-info-circle"></i> Nếu đã chuyển khoản và đặt lệnh bên dưới xong các bạn có thể chụp hóa đơn gửi Fanpage để được duyệt sớm nhất nhé.</span></div>
						<center><p><b>Bước 1</b>: Bạn hãy chuyển khoản vào số tài khoản bên dưới, phần tin nhắn là tài khoản nhận tiền. <b>Nội dung: <?php echo NOTE_TEXT.'-'.$_SESSION['user'];?></b></p>
		<p><b>Lưu ý: </b>Nếu không ghi tài khoản vào phần tin nhắn trong chuyển tiền sẽ không được xử lý (Chuyển khoản số tiền tối thiểu ít nhất 100k)</p></center>
                            <img src="images/vietcombank.jpg" class="img-responsive center-block" width="100px">

                            <div class="center-block" style="padding-top:10px;max-width:500px">
                                <form method="post" accept-charset="utf-8" id="recharge-bank" novalidate="novalidate" class="bv-form"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                    <div class="form-group">
                                        <div class="input-field">
                                            <label class="placeholder active"><span>Chủ tài khoản</span></label>
                                            <input type="text" value="<?php echo ATM_NAME;?>" readonly="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-field">
                                            <label class="placeholder active"><span>Số tài khoản</span></label>
                                            <input type="text" value="<?php echo ATM_ID;?>" readonly="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-field">
                                            <label class="placeholder active"><span>Nội dung chuyển khoản</span></label>
                                            <input type="text" value="<?php echo NOTE_TEXT.'-'.$_SESSION['user'];?>" readonly="" class="form-control">
                                        </div>
                                    </div>
<p><b>Bước 2</b>: Sau khi chuyển tiền thành công, bạn hãy nhập số tiền đã chuyển vào bên dưới và xác nhận để BQT duyệt nhé</p>
                                    <div class="form-group">
                                        <div class="input-field">
                                            <label class="placeholder active"><span>Số tiền chuyển khoản</span></label>
                                            <input type="number" min="10000" max="100000000" value="0" id="money" name="money" class="form-control" data-bv-field="money">
                                        </div>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="money" data-bv-result="NOT_VALIDATED" style="display: none;">Vui lòng nhập số tiền nạp</small><small class="help-block" data-bv-validator="integer" data-bv-for="money" data-bv-result="NOT_VALIDATED" style="display: none;">Số tiền không hợp lệ</small><small class="help-block" data-bv-validator="greaterThan" data-bv-for="money" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value greater than or equal to %s</small><small class="help-block" data-bv-validator="lessThan" data-bv-for="money" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value less than or equal to %s</small></div>

                                    <div class="form-group">
                                        <div class="input-field">
                                            <label class="placeholder active"><span>VNĐ nhận được</span></label>
                                            <input type="text" value="0" id="moneyget" readonly="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block" id="signin-button">
                                            Xác nhận
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
						<div role="tabpanel" class="tab-pane" id="history-momo">
						<div class="alert alert-warning" role="alert">
						<span style="color: #0c5460;"> <i class="fa fa-info-circle"></i> Nếu đã chuyển khoản và đặt lệnh bên dưới xong các bạn có thể chụp hóa đơn gửi Fanpage để được duyệt sớm nhất nhé.</span></div><center><p><b>Bước 1</b>: Bạn hãy <b>Quét mã</b> dưới đây bằng ứng dụng <b>Momo</b>. Hoặc Chuyển khoản Momo tới SĐT: <b><?php echo MOMO_ID;?></b></p><p>Chọn mục <b>Chuyển tiền</b> phần tin nhắn là tài khoản nhận tiền. <b> Nội dung: <?php echo NOTE_TEXT.'-'.$_SESSION['user'];?></b></p>
		<p><b>Lưu ý: </b>Nếu không ghi tài khoản vào phần tin nhắn trong momo sẽ không được xử lý</p></center>
                           

                            <div class="center-block" style="padding-top:10px;max-width:500px">
                                <form method="post" accept-charset="utf-8" id="recharge-momo" novalidate="novalidate" class="bv-form"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                    <div class="form-group">
                                        <div class="input-field">
                                            <label class="placeholder active"><span>Chủ tài khoản</span></label>
                                            <input type="text" value="<?php echo MOMO_NAME;?>" readonly="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-field">
                                            <label class="placeholder active"><span>Số tài khoản</span></label>
                                            <input type="text" value="<?php echo MOMO_ID;?>" readonly="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-field">
                                            <label class="placeholder active"><span>Nội dung chuyển khoản</span></label>
                                            <input type="text" value="<?php echo NOTE_TEXT.'-'.$_SESSION['user'];?>" readonly="" class="form-control">
                                        </div>
                                    </div>
<p><b>Bước 2</b>: Sau khi chuyển tiền thành công,(Các bạn bấm qua phần chuyển khoản ATM nhập số tiền bên dưới giúp mình nhé)</p>
                                    <div class="form-group">
                                        <div class="input-field">
                                            <label class="placeholder active"><span>Số tiền chuyển khoản</span></label>
                                            <input type="number" min="10000" max="100000000" value="0" id="moneymomo" name="moneymomo" class="form-control" data-bv-field="moneymomo">
                                        </div>
                                    <small class="help-block" data-bv-validator="greaterThan" data-bv-for="moneymomo" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value greater than or equal to %s</small><small class="help-block" data-bv-validator="integer" data-bv-for="moneymomo" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a valid number</small><small class="help-block" data-bv-validator="lessThan" data-bv-for="moneymomo" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value less than or equal to %s</small></div>

                                    <div class="form-group">
                                        <div class="input-field">
                                            <label class="placeholder active"><span>VNĐ nhận được</span></label>
                                            <input type="text" value="0" id="moneymomoget" readonly="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block" id="signin-button">
                                            Xác nhận
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="history-buy-appota-card">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Loại</th>
											<th>Số tiền</th>
											<th>Serial</th>
											<th>Mã thẻ</th>
											<th>Thời gian</th>
											<th>Tình trạng</th>
										</tr>
									</thead>
									<tbody id="history_charge"></tbody>
								</table>
							</div>
                        </div>
						<div role="tabpanel" class="tab-pane" id="history-buy-appota-vnd">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>ID N.Vật</th>
											<th>Tên N.Vật</th>
											<th>Gói Mua</th>
											<th>Số Tiền</th>
											<th>Thời gian</th>
											<th>Tình trạng</th>
										</tr>
									</thead>
									<tbody id="history_chargevnd"></tbody>
								</table>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function loadHistoryCharge() {

    $.ajax({
        type: 'POST',
        url: 'ajax/historyrecharge.php',
        success: function(data) {

            var htmlHis = '';
            $.each( data['result'], function( key, value ) {
                htmlHis += '<tr>';
                htmlHis += '<th><img src="images/card-' + value['NameCard'].toLowerCase() + '.png" height="20px" /></th>';
                htmlHis += '<th>' + $.number(value['Money']) + '</th>';
                htmlHis += '<th>' + value['Seri'] + '</th>';
                htmlHis += '<th>' + value['Pin'] + '</th>';
                htmlHis += '<th>' + timeConverter(value['Timer']) + '</th>';
                htmlHis += '<th>' + typeTextHtml(value['Type']) + '</th>';
                htmlHis += '</tr>';
            });
            $('#history_charge').html(htmlHis);
        },
        contentType: "application/json",
        dataType: 'json'
    });
}
$(document).ready(function() {
    loadHistoryCharge();
    $('#recharge-bank').bootstrapValidator({
        message: 'Dữ liệu không hợp lệ',
        excluded: ':disabled',
        fields: {
            money: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập số tiền nạp'
                    },
                    integer: {
                        message: 'Số tiền không hợp lệ'
                    }
                }
            }
        }
    }).on('success.form.bv', function(e) {
        // Prevent form submission
        e.preventDefault();

        // Get the form instance
        var $form = $(e.target);

        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');

        // Use Ajax to submit form data
        $.post('ajax/rechargebank.php', $form.serialize(), function(result) {

            if (result['code'] == 0) {
                $('#money').val('0');
                swal("Thành công", result['msg'], "success");
                loadHistoryCharge();
            } else {
                swal("Lỗi", result['msg'], "error");
            }

        }, 'json');
    });
	
    $('#recharge-momo').bootstrapValidator({
        message: 'Dữ liệu không hợp lệ',
        excluded: ':disabled',
        fields: {
            money: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập số tiền nạp'
                    },
                    integer: {
                        message: 'Số tiền không hợp lệ'
                    }
                }
            }
        }
    }).on('success.form.bv', function(e) {
        // Prevent form submission
        e.preventDefault();

        // Get the form instance
        var $form = $(e.target);

        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');

        // Use Ajax to submit form data
        $.post('ajax/rechargemomo.php', $form.serialize(), function(result) {

            if (result['code'] == 0) {
                $('#money').val('0');
                swal("Thành công", result['msg'], "success");
                loadHistoryCharge();
            } else {
                swal("Lỗi", result['msg'], "error");
            }

        }, 'json');
    });
	
    $('#recharge-telco').bootstrapValidator({
        message: 'Dữ liệu không hợp lệ',
        excluded: ':disabled',
        fields: {
            typecard: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng chọn loại thẻ'
                    }
                }
            },
            cardmoney: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng chọn mệnh giá'
                    }
                }
            },
            passcard: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập mã thẻ'
                    }
                }
            },
            serialcard: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng nhập số serial'
                    }
                }
            }
        }
    }).on('success.form.bv', function(e) {
        // Prevent form submission
        e.preventDefault();

        // Get the form instance
        var $form = $(e.target);

        // Get the BootstrapValidator instance
        var bv = $form.data('bootstrapValidator');

        // Use Ajax to submit form data
        $.post('ajax/rechargetelco.php', $form.serialize(), function(result) {

            if (result['code'] == 0) {
                swal("Thành công", result['msg'], "success");
                loadHistoryCharge();
            } else {
                swal("Lỗi", result['msg'], "error");
            }

        }, 'json');
    });

    $( "#money" ).keyup(function() {
        var moneyInput = parseInt($('#money').val());

        if(moneyInput > 0) {

            // math money
            var moneyGet = moneyInput * 1.2;

            $('#moneyget').val($.number(moneyGet));

        } else {
            $('#moneyget').val('0');
        }
    });
	$( "#money" ).keyup(function() {
        var moneyInput = parseInt($('#money').val());

        if(moneyInput > 0) {

            // math money
            var moneyGet = moneyInput * 1.2;

            $('#moneyget').val($.number(moneyGet));

        } else {
            $('#moneyget').val('0');
        }
    });	
	$( "#moneymomo" ).keyup(function() {
        var moneymomoInput = parseInt($('#moneymomo').val());

        if(moneymomoInput > 0) {

            // math money
            var moneymomoGet = moneymomoInput * 1.2;

            $('#moneymomoget').val($.number(moneymomoGet));

        } else {
            $('#moneymomoget').val('0');
        }
    });
	
	    $.ajax({
        type: 'POST',
        url: 'ajax/historyrechargevnd.php',
        success: function(data) {

            var htmlHis = '';
            $.each( data['result'], function( key, value ) {
                htmlHis += '<tr>';
                htmlHis += '<th>' + value['roleId'] + '</th>';
                htmlHis += '<th>' + value['roleName'] + '</th>';
                htmlHis += '<th>' + value['productDesc'] + '</th>';
                htmlHis += '<th>' + $.number(value['totalAmount']) +  ' VNĐ' + '</th>';
                htmlHis += '<th>' + timeConverter(value['paidTime']) + '</th>';
                htmlHis += '<th>' + typeTextHtml2(value['payStatus']) + '</th>';
                htmlHis += '</tr>';
            });
            $('#history_chargevnd').html(htmlHis);
        },
        contentType: "application/json",
        dataType: 'json'
    });
});
$('.input-field').each(function() {
            var ip = $(this).find('input');
            ip.focus(function() {
                $(this).prev('label').addClass('active');
            });
            ip.blur(function() {
                if ($(this).val() === '') {
                    $(this).prev('label').removeClass('active');
                }
            });
            if (ip.val() !== '') {
                $(this).find('label.placeholder').addClass('active');
            }

        });
</script>                    