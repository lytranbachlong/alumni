<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <title>応募者検索</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style-search.css" rel="stylesheet">
    <link href="js/chosen/prism.css" rel="stylesheet">
    <link href="js/chosen/chosen.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="datatables/dataTables.bootstrap.css">
     <!-- <link rel="stylesheet" href="datatables/jquery.dataTables.min.css"> -->
    <!--[if (gte IE 6)&(lte IE 8)]>
<script type="text/javascript" src="js/html5.js"></script>
<script type="text/javascript" src="js/selectivizr-min.js"></script>
<link rel="stylesheet" href="css/ie_7.css" type="text/css" />
<![endif]-->
    <script type="text/javascript" src="js/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script src="datatables/jquery.dataTables.min.js"></script>
    <script src="datatables/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="js/all-in-one.js"></script>
    <script type="text/javascript" src="js/setup.js"></script>
    <script type="text/javascript" src="js/chosen/chosen.jquery.js"></script>
    <script type="text/javascript" src="js/chosen/prism.js"></script>
</head>
<body>
    <!-- Header -->
    <header >
         <div class="center_box"  style="text-align:center ;">

            <div class="attention_box_header">
                  <table style="margin: 0 0 0 auto; width: 100%;">
                   <tbody>
                    <tr>
                        <td class="flexibleContainer3" style="padding-bottom: 0px; text-align: center;">
                            <a href="/tokyoschool/index.php">
                                <image src="./images/header/atm.png">
                            </a>
                        </td>
                        <td class="flexibleContainer1" style="color: #2b729f;padding-bottom: 0px;padding-right: 0px;font-weight: bold">

                    Actual Tokyo Max Co., Ltd

                        </td>
                        <td class="flexibleContainer2" style="background-color: #049ddb;padding: 0px;border: 0px; text-align: left">
                            <image src="./images/header/tokyoschoolicon.png">
                        </td>
                        <td class="flexibleContainer" style="background-color: #049ddb; color: white;padding: 0px; padding-right: 100px">
                            <div class="login"><a href="login.php" class="button grey" style="width: 100px;margin-right: 8%">ログアウト</a></div>
                        </td>
                    </tr>
                </tbody>
            </table>

                </div>
        </div>
    </header>
    <!-- /Header -->
    <!-- START CONTENT -->
    <section class="container clearfix">

        <div class="clear padding30"></div>
                <div class="center_box"  style="text-align:center ;">
                    <div class="attention_box6">
                        <h3>応募者検索</h3>
                    </div>
                </div>


                <div class="attention_box7 bg-search-box">
                	<div class="row search-box ">
                	<form>
                		<div class="col-sm-12 quick-search">
                			<div class="col-sm-4  margin-top-5">
                				<input type="tex" class="form-control" placeholder="キーワード">
                			</div>
                			<div class="col-sm-4  margin-top-5">
                				<select  onchange="getSkills(this);" name="career" data-placeholder="業種"  multiple class="chosen-select-career form-control " tabindex="11" >
                                            <option value="1">IT</option>
                                            <option value="2">Marketing</option>
                            	</select>
                			</div>
                			<div class="col-sm-4  margin-top-5">
                				<select  name="area" data-placeholder="働きたい場所"  multiple class="chosen-select-area form-control " tabindex="11" >
                                            <option value="1">ベトナム</option>
                                            <option value="2">日本</option>
                                            <option value="3">ミャンマー</option>
                            	</select>
                			</div>
                		</div>
                		<div class="col-sm-12 career-it hide">
                			<div class="panel panel-default panel-skills">
							  <div class="panel-heading">スキル</div>
							  <div class="panel-body">
							  	<div class="row">
							  		<div class="col-sm-4  margin-top-5">
							  			<select name="skill" class="form-control">
							  				<option value="-1">スキル</option>
							  				<option value="1">Ｊａｖａ</option>
							  				<option value="2">C# .NET</option>
							  				<option value="3">PHP</option>
							  				<option value="4">My SQL</option>
							  				<option value="5">SQL</option>

							  			</select>
							  		</div>
							  		<div class="col-sm-4  margin-top-5">
							  			<select name="exprience" class="form-control">
							  				<option value="-1">経験</option>
							  				<option value="1">１年以下</option>
							  				<option value="2">２年</option>
							  				<option value="3">３年</option>
							  				<option value="4">４年</option>
							  				<option value="5">５年以上</option>

							  			</select>
							  		</div>
							  		<div class="col-sm-4 text-left  margin-top-5"><button class="btn btn-primary"> 追加</button></div>
							  		<div class="col-sm-12 skill-selected">
							  			<span class="alert-success alert alert-skill-selected"><i class="fa fa-check"></i> PHP</span>
							  		</div>
							  	</div>
							  </div>
							    <div class="panel-heading">OS</div>
							    <div class="panel-body">
								  	<div class="row">
								  		<div class="col-sm-4  margin-top-5">
								  			<select name="os" class="form-control">
								  				<option value="-1">OS</option>
								  				<option value="1">Windows</option>
								  				<option value="2">Mac OS</option>
								  				<option value="3">CentOS</option>
								  			</select>
								  		</div>
								  		<div class="col-sm-4  margin-top-5">
								  			<select name="exprience" class="form-control">
								  				<option value="-1">経験</option>
								  				<option value="1">１年以下</option>
								  				<option value="2">２年</option>
								  				<option value="3">３年</option>
								  				<option value="4">４年</option>
								  				<option value="5">５年以上</option>

								  			</select>
								  		</div>
								  		<div class="col-sm-4 text-left  margin-top-5"><button class="btn btn-primary"> 追加</button></div>
								  		<div class="col-sm-12 skill-selected">
								  			<span class="alert-success alert alert-os-selected"><i class="fa fa-check"></i> Windows</span>
								  		</div>
								  	</div>
							  </div>
							</div>
                		</div>
                		<div class="col-sm-12 text-right padding-top-5"><a class="link-advance-search" href="javascript:void(0);"><i class="fa fa-caret-square-o-down"></i> 表示・非表示詳細条件</a></div>
                		<div class="col-sm-12 advance-search " style="display: none">
                			<h1 class="h1-advance-search"> 詳細条件部分</h1>
                			<div class="col-sm-4 margin-top-5">
                				<select name="language" class="form-control">
								  				<option value="-1">言語</option>
								  				<option value="1">日本語</option>
								  				<option value="2">英語</option>
								  				<option value="3">ベトナム語</option>
								  				<option value="4">ミャンマー語</option>
								 </select>
                			</div>
                			<div class="col-sm-4 margin-top-5">
                				<select name="level-language" class="form-control">
								  				<option value="-1">言語能力</option>
								  				<option value="1">初級者</option>
								  				<option value="2">中級者</option>
								  				<option value="3">上級者</option>

								 </select>
                			</div>
                			<div class="col-sm-4 text-left margin-top-5"><button class="btn btn-primary"> 追加</button></div>
                			<div class="col-sm-4 margin-top-5">
                				<select name="education" class="form-control">
								  				<option value="-1">教育</option>
								  				<option value="1">専門学校卒業</option>
								  				<option value="2">大学卒業</option>
								  				<option value="3">大学卒業後</option>
								  				<!-- <option value="4">ミャンマー語</option> -->
								 </select>
                			</div>
                			<div class="col-sm-4 margin-top-5">
                				<select name="national" class="form-control">
								  				<option value="-1">国籍</option>
								  				<option value="1">日本</option>
								  				<option value="2">ベトナム</option>
								  				<option value="3">ミャンマー</option>

								 </select>
                			</div>
                			<div class="col-sm-4 margin-top-5">
                				<select name="age" class="form-control">
								  				<option value="-1">年齢層</option>
								  				<option value="1">２０代</option>
								  				<option value="2">３０代</option>
								  				<option value="3">４０代</option>
								  				<option value="4">５０代以上</option>

								 </select>
                			</div>
                			<div class="col-sm-6 margin-top-5">
                				<label>性別</label>
                				<label>
                					<input type="radio" name="sex" value="male">男</label>
                				</label>
                				<label>
                					<input type="radio" name="sex" value="female">女</label>
                				</label>
                			</div>

                		</div>
                		<div class="col-sm-12 text-right margin-top-5"><button class="btn btn-info btn-md  margin-right-15"><i class="fa fa-search"></i> 検索</button></div>

                	</form>
                	</div>
                	<div class="row">
                		<div class="col-sm-12">
                			<div class="box">
                <div class="box-header">
                  <h3 class="box-title">OOO応募者見つかりました</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>プロフィール画像</th>
                        <th> 氏名</th>
                        <th>性別</th>
                        <th>年齢</th>
                        <th>国籍</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><img src="./images/avatarimg.png" class="img-avatar"></td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td><a href="profile.php" class="btn btn-primary">詳細</a></td>

                      </tr>
                      <tr>
                        <td><img src="./images/avatarimg.png" class="img-avatar"></td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td><a href="profile.php" class="btn btn-primary">詳細</a></td>

                      </tr>
                      <tr>
                        <td><img src="./images/avatarimg.png" class="img-avatar"></td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td><a href="profile.php" class="btn btn-primary">詳細</a></td>

                      </tr>
                      <tr>
                        <td><img src="./images/avatarimg.png" class="img-avatar"></td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td><a href="profile.php" class="btn btn-primary">詳細</a></td>

                      </tr>
                      <tr>
                        <td><img src="./images/avatarimg.png" class="img-avatar"></td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td><a href="profile.php" class="btn btn-primary">詳細</a></td>

                      </tr>
                      <tr>
                        <td><img src="./images/avatarimg.png" class="img-avatar"></td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td><a href="profile.php" class="btn btn-primary">詳細</a></td>

                      </tr>
                      <tr>
                        <td><img src="./images/avatarimg.png" class="img-avatar"></td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td><a href="profile.php" class="btn btn-primary">詳細</a></td>

                      </tr>
                      <tr>
                        <td><img src="./images/avatarimg.png" class="img-avatar"></td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td><a href="profile.php" class="btn btn-primary">詳細</a></td>

                      </tr>
                      <tr>
                        <td><img src="./images/avatarimg.png" class="img-avatar"></td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td><a href="profile.php" class="btn btn-primary">詳細</a></td>

                      </tr>
                      <tr>
                        <td><img src="./images/avatarimg.png" class="img-avatar"></td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td><a href="profile.php" class="btn btn-primary">詳細</a></td>

                      </tr>
                      <tr>
                        <td><img src="./images/avatarimg.png" class="img-avatar"></td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td><a href="profile.php" class="btn btn-primary">詳細</a></td>

                      </tr>
                      <tr>
                        <td><img src="./images/avatarimg.png" class="img-avatar"></td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td><a href="profile.php" class="btn btn-primary">詳細</a></td>

                      </tr>
                      <tr>
                        <td><img src="./images/avatarimg.png" class="img-avatar"></td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td><a href="profile.php" class="btn btn-primary">詳細</a></td>

                      </tr>
                      <tr>
                        <td><img src="./images/avatarimg.png" class="img-avatar"></td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td><a href="profile.php" class="btn btn-primary">詳細</a></td>

                      </tr>
                  </table>
                </div><!-- /.box-body -->
              </div>
                		</div>
                	</div>
                </div>





	</section>
      <div class="clear padding30"></div>
    <!-- END CONTENT -->
    <!-- footer -->
    <footer>

		<div class="center_box"  style="text-align:center ;background-color: #ecf0f1">


                    <div class="attention_box_foodter">
			<table>

                                <tr>
                                    <td class="flexiblefooterleft" style="padding-top: 10px">
                                         Copyright © 2015 ATM Co.,I.td. Allrights reserved
                                    </td>
                                    <td class="flexiblefooterright">
                                        <a href="abount.php">会社概要</a>&nbsp;&nbsp;
                                        <a href="operations.php">ポリシー</a>&nbsp;&nbsp;
                                        <a href="contact.php">お問い合わせ</a>

                                    </td>

                                </tr>
                                <tr>

                                    <td class="flexiblefooterright" colspan="2">
                                        <div style="font-size: 15px">

                                           <a href="http://facebook.com/"><img src="images/twitter.png" width="24" height="24" alt="Twitter">
                                            <a href="https://twitter.com/"><img src="images/facebook.png" alt="Facebook"></a>
                                        言語
                                        <select name="formGender"  class="select_langue">
                                            <option value="M">日本語</option>
                                            <option value="F">English</option>
                                            <option value="F">Tiếng Việt</option>
                                            <option value="F">Myanma</option>
                                        </select>
                                        </div>
                                    </td>

                                </tr>
                            </table>
			</div>
                </div>
	</footer>
    <!-- /footer -->
    <script type="text/javascript">
    $(document).ready(function() {
    //checkValidInput();
    $(".chosen-select-career").chosen({max_selected_options: 5});
    $(".chosen-select-area").chosen({max_selected_options: 5});
    $(".link-advance-search").on("click",function(){
    	$(".advance-search").toggle();
    });

    // $("#example1").DataTable();


	});
	 function getSkills(sel) {
       if(sel.value == 1){
       		$(".career-it").removeClass('hide');
       }
       else {
       		$(".career-it").addClass('hide');
       }
    }
         $(function () {
        $('#example1').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
           "dom": '<"top"iflp<"clear">>rt<"bottom"iflp<"clear">>'
        });

      });
    </script>
</body>
</html>
