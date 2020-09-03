<!DOCTYPE html>
<html lang="vi">
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# book: http://ogp.me/ns/book# profile: http://ogp.me/ns/profile#">
		<meta charset="UTF-8">
		<title>Đọc truyện online, đọc truyện hay</title>
		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
		<meta name="description" content="Đọc truyện online, đọc truyện chữ, truyện hay, truyện full. Truyện Full luôn tổng hợp và cập nhật các chương truyện một cách nhanh nhất.">
		<meta name="keywords" content="doc truyen, doc truyen online, truyen hay, truyen chu">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	</head>
	<body id="body_home">
		<div id="wrap">
			<div class="navbar navbar-default navbar-static-top" role="navigation" id="nav">
				<script type="text/javascript">function getCookie(d){d+="=";for(var b=decodeURIComponent(document.cookie).split(";"),c=[],a=0;a<b.length;a++)0==b[a].trim().indexOf(d)&&(c=b[a].trim().split("="));return 0<c.length?c[1]:""}var js_bgcolor=getCookie("bgcolor-cookie");"#232323"==js_bgcolor&&(document.getElementsByTagName("body")[0].className+=" dark-theme");</script>
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Hiện menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
						<h1><a class="header-logo" href="" title="doc truyen">doc truyen</a></h1>
					</div>
					<div class="navbar-collapse collapse" itemscope itemtype="">
						<meta itemprop="url" content="" />
						<ul class="control nav navbar-nav ">
							<li class="dropdown">
								<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span> Danh sách <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="javascript:void(0)" title="Truyện mới cập nhật">Truyện mới cập nhật</a></li>
									<li><a href="javascript:void(0)" title="Truyện Hot">Truyện Hot</a></li>
									<li><a href="javascript:void(0)" title="Truyện Full">Truyện Full</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span> Thể loại <span class="caret"></span></a>
								<div class="dropdown-menu multi-column">
									<div class="row">
										<div class="col-md-4">
											<ul class="dropdown-menu">
												<li><a href="#" title="Truyện Tiên Hiệp">Tiên Hiệp</a></li>
											</ul>
										</div>
										<div class="col-md-4">
											<ul class="dropdown-menu">
												<li><a href="#" title="Truyện Xuyên Không">Xuyên Không</a></li>

											</ul>
										</div>
										<div class="col-md-4">
											<ul class="dropdown-menu">
												<li><a href="#" title="Truyện Đam Mỹ">Đam Mỹ</a></li>

											</ul>
										</div>
									</div>
								</div>
							</li>
							<li class="dropdown">
								<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> Tùy chỉnh <span class="caret"></span></a>
								<div class="dropdown-menu dropdown-menu-right settings">
									<form class="form-horizontal">
										<div class="form-group form-group-sm">
											<label class="col-sm-2 col-md-5 control-label" for="truyen-background">Màu nền</label>
											<div class="col-sm-5 col-md-7">
												<select class="form-control" id="truyen-background">
													<option value="#F4F4F4" selected>Xám nhạt</option>
													<option value="#232323">Màu tối</option>
												</select>
											</div>
										</div>
									</form>
								</div>
							</li>
						</ul>
						<form class="navbar-form navbar-right" action="#" role="search" itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction">
							<div class="input-group search-holder">
								<meta itemprop="target" content="#" />
								<input aria-label="Từ khóa tìm kiếm" role="search key" class="form-control" id="search-input" type="search" name="tukhoa" placeholder="Tìm kiếm..." value="" itemprop="query-input" required>
								<div class="input-group-btn"><button class="btn btn-default" type="submit" aria-label="Tìm kiếm" role="search"><span class="glyphicon glyphicon-search"></span></button></div>
							</div>
							<div class="list-group list-search-res hide"></div>
						</form>
					</div>
				</div>
				<div class="navbar-breadcrumb">
					<div class="container breadcrumb-container"> Đọc truyện online, đọc truyện chữ, truyện full, truyện hay. Tổng hợp đầy đủ và cập nhật liên tục. </div>
				</div>
			</div>
			<div class="container" id="intro-index">
				<div class="title-list">
					<h2><a href="#" title="Truyện hot">Truyện hot</a></h2>
					<a href="#" title="Truyện hot"><span class="glyphicon glyphicon-fire"></span></a>
					<select id="hot-select" class="form-control new-select" aria-label="Chọn thể loại">
						<option value="all">Tất cả</option>

					</select>
				</div>
				<div class="index-intro">
					<div class="item top-1" itemscope itemtype="#">
						<a href="#=" itemprop="url">
                            @if ($story1->status == 1)
                            <span class="full-label"></span>
                            @endif
                            <img src="{{URL::to('images/' . $story1->image)}}
                            " lazysrc=" {{URL::to('images/' . $story1->image)}}" alt="{{$story1->name}}" class="img-responsive item-img" itemprop="image">
							<div class="title">
								<h3 itemprop="name">{{$story1->name}}</h3>
							</div>
						</a>
					</div>
					<div class="item top-2" itemscope itemtype="#">
						<a href="#" itemprop="url">
                            @if ($story2->status == 1)
                            <span class="full-label"></span>
                            @endif
                            <img src="
                            {{URL::to('images/' . $story2->image)}}
                            " lazysrc=" {{URL::to('images/' . $story2->image)}}" alt="{{$story2->name}}" class="img-responsive item-img" itemprop="image">
							<div class="title">
								<h3 itemprop="name">{{$story2->name}}</h3>
							</div>
						</a>
					</div>
					<div class="item top-3" itemscope itemtype="#">
						<a href="#" itemprop="url">
                            @if ($story3->status == 1)
                            <span class="full-label"></span>
                            @endif<img src="
                            {{URL::to('images/' . $story3->image)}}
                            " lazysrc=" {{URL::to('images/' . $story3->image)}}" alt="{{$story3->name}}" class="img-responsive item-img" itemprop="image">
							<div class="title">
								<h3 itemprop="name">{{$story3->name}}</h3>
							</div>
						</a>
					</div>
					<div class="item top-4" itemscope itemtype="#">
						<a href="#" itemprop="url">
                            @if ($story4->status == 1)
                            <span class="full-label"></span>
                            @endif<img src="
                            {{URL::to('images/' . $story4->image)}}
                            " lazysrc=" {{URL::to('images/' . $story4->image)}}" alt="{{$story4->name}}" class="img-responsive item-img" itemprop="image">
							<div class="title">
								<h3 itemprop="name">{{$story4->name}}</h3>
							</div>
						</a>
					</div>
					<div class="item top-5" itemscope itemtype="">
						<a href="" itemprop="url">
                            @if ($story5->status == 1)
                            <span class="full-label"></span>
                            @endif<img src="
                            {{URL::to('images/' . $story5->image)}}
                            " lazysrc=" {{URL::to('images/' . $story5->image)}}" alt="{{$story5->name}}" class="img-responsive item-img" itemprop="image">
							<div class="title">
								<h3 itemprop="name">{{$story5->name}}</h3>
							</div>
						</a>
					</div>
					<div class="item top-6" itemscope itemtype="">
						<a href="" itemprop="url">
                            @if ($story6->status == 1)
                            <span class="full-label"></span>
                            @endif<img src="
                            {{URL::to('images/' . $story6->image)}}
                            " lazysrc=" {{URL::to('images/' . $story6->image)}}" alt="{{$story6->name}}" class="img-responsive item-img" itemprop="image">
							<div class="title">
								<h3 itemprop="name">{{$story6->name}}</h3>
							</div>
						</a>
					</div>
					<div class="item top-7" itemscope itemtype="">
						<a href="" itemprop="url">
                            @if ($story7->status == 1)
                            <span class="full-label"></span>
                            @endif<img src="
                            {{URL::to('images/' . $story7->image)}}
                            " lazysrc=" {{URL::to('images/' . $story7->image)}}" alt="{{$story7->name}}" class="img-responsive item-img" itemprop="image">
							<div class="title">
								<h3 itemprop="name">{{$story7->name}}</h3>
							</div>
						</a>
					</div>
					<div class="item top-8" itemscope itemtype="">
						<a href="" itemprop="url">
                            @if ($story8->status == 1)
                            <span class="full-label"></span>
                            @endif<img src="
                            {{URL::to('images/' . $story8->image)}}
                            " lazysrc=" {{URL::to('images/' . $story8->image)}}" alt="{{$story8->name}}" class="img-responsive item-img" itemprop="image">
							<div class="title">
								<h3 itemprop="name">{{$story8->name}}</h3>
							</div>
						</a>
					</div>
					<div class="item top-9" itemscope itemtype="">
						<a href="" itemprop="url">
                            @if ($story9->status == 1)
                            <span class="full-label"></span>
                            @endif<img src="
                            {{URL::to('images/' . $story9->image)}}
                            " lazysrc=" {{URL::to('images/' . $story9->image)}}" alt="{{$story9->name}}" class="img-responsive item-img" itemprop="image">
							<div class="title">
								<h3 itemprop="name">{{$story9->name}}</h3>
							</div>
						</a>
					</div>
					<div class="item top-10" itemscope itemtype="">
						<a href="" itemprop="url">
                            @if ($story10->status == 1)
                            <span class="full-label"></span>
                            @endif<img src="
                            {{URL::to('images/' . $story10->image)}}
                            " lazysrc=" {{URL::to('images/' . $story10->image)}}" alt="{{$story10->name}}" class="img-responsive item-img" itemprop="image">
							<div class="title">
								<h3 itemprop="name">{{$story10->name}}</h3>
							</div>
						</a>
					</div>
					<div class="item top-11" itemscope itemtype="">
						<a href="" itemprop="url">
                            @if ($story11->status == 1)
                            <span class="full-label"></span>
                            @endif<img src="
                            {{URL::to('images/' . $story11->image)}}
                            " lazysrc=" {{URL::to('images/' . $story11->image)}}" alt="{{$story11->name}}" class="img-responsive item-img" itemprop="image">
							<div class="title">
								<h3 itemprop="name">{{$story11->name}}</h3>
							</div>
						</a>
					</div>
					<div class="item top-12" itemscope itemtype="">
						<a href="" itemprop="url">
                            @if ($story12->status == 1)
                            <span class="full-label"></span>
                            @endif<img src="
                            {{URL::to('images/' . $story12->image)}}
                            " lazysrc=" {{URL::to('images/' . $story12->image)}}" alt="{{$story12->name}}" class="img-responsive item-img" itemprop="image">
							<div class="title">
								<h3 itemprop="name">{{$story12->name}}</h3>
							</div>
						</a>
					</div>
					<div class="item top-13" itemscope itemtype="">
						<a href="" itemprop="url">
                            @if ($story13->status == 1)
                            <span class="full-label"></span>
                            @endif<img src="
                            {{URL::to('images/' . $story13->image)}}
                            " lazysrc=" {{URL::to('images/' . $story13->image)}}" alt="{{$story13->name}}" class="img-responsive item-img" itemprop="image">
							<div class="title">
								<h3 itemprop="name">{{$story13->name}}</h3>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="container" id="list-index">
				<div class="row text-center"></div>
				<div class="hide" id="history-holder"></div>
				<div class="list list-truyen list-new col-xs-12 col-sm-12 col-md-8 col-truyen-main">
					<div class="title-list">
						<h2><a href="" title="Truyện mới">Truyện mới cập nhật</a></h2>
						<a href="" title="Truyện mới"><span class="glyphicon glyphicon-menu-right"></span></a>
						<select id="new-select" class="form-control new-select" aria-label="Chọn thể loại">
							<option value="all">Tất cả</option>
							<option value="1">Tiên Hiệp</option>
							<option value="2">Kiếm Hiệp</option>
							<option value="3">Ngôn Tình</option>
							<option value="4">Đô Thị</option>
							<option value="20">Quan Trường</option>
							<option value="6">Võng Du</option>
							<option value="5">Khoa Huyễn</option>
							<option value="39">Hệ Thống</option>
							<option value="8">Huyền Huyễn</option>
							<option value="7">Dị Giới</option>
							<option value="19">Dị Năng</option>
							<option value="10">Quân Sự</option>
							<option value="11">Lịch Sử</option>
							<option value="15">Xuyên Không</option>
							<option value="38">Xuyên Nhanh</option>
							<option value="17">Trọng Sinh</option>
							<option value="18">Trinh Thám</option>
							<option value="16">Thám Hiểm</option>
							<option value="9">Linh Dị</option>
							<option value="12">Sắc</option>
							<option value="30">Ngược</option>
							<option value="36">Sủng</option>
							<option value="21">Cung Đấu</option>
							<option value="22">Nữ Cường</option>
							<option value="24">Gia Đấu</option>
							<option value="23">Đông Phương</option>
							<option value="13">Đam Mỹ</option>
							<option value="14">Bách Hợp</option>
							<option value="25">Hài Hước</option>
							<option value="27">Điền Văn</option>
							<option value="28">Cổ Đại</option>
							<option value="29">Mạt Thế</option>
							<option value="26">Truyện Teen</option>
							<option value="32">Phương Tây</option>
							<option value="33">Nữ Phụ</option>
							<option value="34">Light Novel</option>
							<option value="35">Việt Nam</option>
							<option value="37">Đoản Văn</option>
							<option value="31">Khác</option>
						</select>
                    </div>
                    {{-- <div class="row" itemscope itemtype="https://schema.org/Book">
						<div class="col-xs-9 col-sm-6 col-md-5 col-title">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<h3 itemprop="name"><a href="https://truyenfull.vn/tro-ve-tu-dia-nguc/" title="Trở Về Từ Địa Ngục" itemprop="url">Trở Về Từ Địa Ngục</a></h3>
						</div>
						<div class="hidden-xs col-sm-3 col-md-3 col-cat text-888"><a itemprop="genre" href="https://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="https://truyenfull.vn/the-loai/huyen-huyen/" title="Huyền Huyễn">Huyền Huyễn</a></div>
						<div class="col-xs-3 col-sm-3 col-md-2 col-chap text-info"><a href="https://truyenfull.vn/tro-ve-tu-dia-nguc/chuong-13/" title="Trở Về Từ Địa Ngục - Chương 13"><span class="chapter-text"><span>Chương </span></span>13</a></div>
						<div class="hidden-xs hidden-sm col-md-2 col-time text-888">Vài giây trước</div>
                    </div> --}}

                    @foreach($chapter as $chapters)
					<div class="row" itemscope itemtype="https://schema.org/Book">
						<div class="col-xs-9 col-sm-6 col-md-5 col-title">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<h3 itemprop="name"><a href="#" title="{{$chapters->name}}" itemprop="url">{{$chapters->name}}</a></h3>
						</div>
						<div class="hidden-xs col-sm-3 col-md-3 col-cat text-888"><a itemprop="genre" href="#" title="Đô Thị">Category</a>, <a itemprop="genre" href="#" title="Huyền Huyễn">Category</a></div>
						<div class="col-xs-3 col-sm-3 col-md-2 col-chap text-info"><a href="#" title="Trở Về Từ Địa Ngục - Chương 13"><span class="chapter-text"><span>{{$chapters->subname}}</span></a></div>
                        <div class="hidden-xs hidden-sm col-md-2 col-time text-888"><?php
                            $currentDateTime = date('Y-m-d H:i:s');
                        ?></div>
                    </div>
                    @endforeach
				</div>
				<div class="visible-md-block visible-lg-block col-md-4 text-center col-truyen-side">
					<div class="hide" id="history-holder-side"></div>
					<div class="list list-truyen list-cat col-xs-12">
						<div class="title-list">
							<h4>Thể loại truyện</h4>
						</div>
						<div class="row">
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/tien-hiep/" title="Truyện Tiên Hiệp">Tiên Hiệp</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/kiem-hiep/" title="Truyện Kiếm Hiệp">Kiếm Hiệp</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/ngon-tinh/" title="Truyện Ngôn Tình">Ngôn Tình</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/do-thi/" title="Truyện Đô Thị">Đô Thị</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/quan-truong/" title="Truyện Quan Trường">Quan Trường</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/vong-du/" title="Truyện Võng Du">Võng Du</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/khoa-huyen/" title="Truyện Khoa Huyễn">Khoa Huyễn</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/he-thong/" title="Truyện Hệ Thống">Hệ Thống</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/huyen-huyen/" title="Truyện Huyền Huyễn">Huyền Huyễn</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/di-gioi/" title="Truyện Dị Giới">Dị Giới</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/di-nang/" title="Truyện Dị Năng">Dị Năng</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/quan-su/" title="Truyện Quân Sự">Quân Sự</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/lich-su/" title="Truyện Lịch Sử">Lịch Sử</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/xuyen-khong/" title="Truyện Xuyên Không">Xuyên Không</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/xuyen-nhanh/" title="Truyện Xuyên Nhanh">Xuyên Nhanh</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/trong-sinh/" title="Truyện Trọng Sinh">Trọng Sinh</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/trinh-tham/" title="Truyện Trinh Thám">Trinh Thám</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/tham-hiem/" title="Truyện Thám Hiểm">Thám Hiểm</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/linh-di/" title="Truyện Linh Dị">Linh Dị</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/nguoc/" title="Truyện Ngược">Ngược</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/sung/" title="Truyện Sủng">Sủng</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/cung-dau/" title="Truyện Cung Đấu">Cung Đấu</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/nu-cuong/" title="Truyện Nữ Cường">Nữ Cường</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/gia-dau/" title="Truyện Gia Đấu">Gia Đấu</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/dong-phuong/" title="Truyện Đông Phương">Đông Phương</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/dam-my/" title="Truyện Đam Mỹ">Đam Mỹ</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/bach-hop/" title="Truyện Bách Hợp">Bách Hợp</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/hai-huoc/" title="Truyện Hài Hước">Hài Hước</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/dien-van/" title="Truyện Điền Văn">Điền Văn</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/co-dai/" title="Truyện Cổ Đại">Cổ Đại</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/mat-the/" title="Truyện Mạt Thế">Mạt Thế</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/truyen-teen/" title="Truyện Truyện Teen">Truyện Teen</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/phuong-tay/" title="Truyện Phương Tây">Phương Tây</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/nu-phu/" title="Truyện Nữ Phụ">Nữ Phụ</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/light-novel/" title="Truyện Light Novel">Light Novel</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/viet-nam/" title="Truyện Việt Nam">Việt Nam</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/doan-van/" title="Truyện Đoản Văn">Đoản Văn</a></div>
							<div class="col-xs-6"><a href="https://truyenfull.vn/the-loai/khac/" title="Truyện Khác">Khác</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="container" id="truyen-slide">
				<div class="list list-thumbnail col-xs-12">
					<div class="title-list">
						<h2><a href="https://truyenfull.vn/danh-sach/truyen-full/" title="Truyện full">Truyện đã hoàn thành</a></h2>
						<a href="https://truyenfull.vn/danh-sach/truyen-full/" title="Truyện full"><span class="glyphicon glyphicon-menu-right"></span></a>
					</div>
					<div class="row">
						<div class="col-xs-4 col-sm-3 col-md-2">
							<a href="https://truyenfull.vn/thien-ha-huu-dich/" title="Thiên Hạ Hữu Địch [Luận Anh Hùng]">
								<div class="lazyimg" data-desk-image="https://static.8cache.com/cover/o/eJzLyTDW13UrDcvz9MwID08y0Q8Lyfc3K8y1jHLx1HeEgtz8cv2MPMsQi6Cw-MoAC_1yQzMT3QwjE1MAX20SuQ==/thien-ha-huu-dich.jpg" data-image="https://static.8cache.com/cover/o/eJzLyTDW13UrDcvz9MwID08y0Q8Lyfc3K8y1jHLx1HeEgtz8cv2MPMsQi6Cw-MoAC_1yQ0NT3QxDM3MAX1MSuA==/thien-ha-huu-dich.jpg" data-alt="Thiên Hạ Hữu Địch [Luận Anh Hùng]"></div>
								<div class="caption">
									<h3>Thiên Hạ Hữu Địch [Luận Anh Hùng]</h3>
									<small class="btn-xs label-primary">Full - 132 chương</small>
								</div>
							</a>
						</div>
						<div class="col-xs-4 col-sm-3 col-md-2">
							<a href="https://truyenfull.vn/hy-vong-thanh-ca/" title="[Đồng Nhân Harry Potter] Hy Vọng Thánh Ca">
								<div class="lazyimg" data-desk-image="https://static.8cache.com/cover/eJwN0Mm2Y0AAANAvcpoyZtGLSspU5jFh4_AQPJISUYav776fcMeO_2OeYG1uuJipaD8sA0DH2fH0GukuCVguFbK8VoroE9hKANQcZLWztoaFs-slomYhN8178nkh1rSR6PUiO0Wzucwlsaol4dU4Ydm5AyafTIFTKD-qKRVR0R3KyYhjFLOhkOrrB1q0IxafVht657HrK5US6rwsgOvwwXkf2piArOw-tdy_Jcwg62SpmKUsrQX6WaX9TgCgcZ65pD5MWy93D4b-tKq49PR2CwJXiP3wVdTCF54AhSTAzgytJrsXLvZ1kefaZXqoLJ1ZLUl7kT657GJIjh3FhLvp2a9_PHZ874n1GGeoJp50Zr6WJkibCiPfpGSaFYGZQPJLg-63g-iKZkPVKSSQNVb51pkFEwwszIcTF3ncrn2BK6vLmw1IV6JHP5k43FSZ3tQLmA3b8e2GDAH17kNdZGWgCj144kzTestZxgaaG1OqxZFqY3JUz5W_E8cO0LhJbQu_CK8PNkWwJnFIRG5KXtd3J6CBtFt_lb1XxHqk02Vl923WVoU80d3ScTkZH2ZufX-4NFxW6_l15wtA3-EwW4jB14VooTHTmr7dV6qKG4P19qEJr5m-_I-QeW9RQO_RjnVuU2lywaN-KqNXHy-mGgRdu62qK89W8ulz6yGlcW7m5zdyze8aVb8eynbGhi1joffhk-Y1O5yyJouMBvN0tbG-n1BjSUGffzdOEpgOCOI_YpPmTw==/hy-vong-thanh-ca.jpg" data-image="https://static.8cache.com/cover/eJwN0Mm2Y0AAANAvcpoyZtGLSspU5jFh4_AQPJISUYav776fcMeO_2OeYG1uuJipaD8sA0DH2fH0GukuCVguFbK8VoroE9hKANQcZLWztoaFs-slomYhN8178nkh1rSR6PUiO0Wzucwlsaol4dU4Ydm5AyafTIFTKD-qKRVR0R3KyYhjFLOhkOrrB1q0IxafVht657HrK5US6rwsgOvwwXkf2piArOw-tdy_Jcwg62SpmKUsrQX6WaX9TgCgcZ65pD5MWy93D4b-tKq49PR2CwJXiP3wVdTCF54AhSTAzgytJrsXLvZ1kefaZXqoLJ1ZLUl7kT657GJIjh3FhLvp2a9_PHZ874n1GGeoJp50Zr6WJkibCiPfpGSaFYGZQPJLg-63g-iKZkPVKSSQNVb51pkFEwwszIcTF3ncrn2BK6vLmw1IV6JHP5k43FSZ3tQLmA3b8e2GDAH17kNdZGWgCj144kzTestZxgaaG1OqxZFqY3JUz5W_E8cO0LhJbQu_CK8PNkWwJnFIRG5KXtd3J6CBtFt_lb1XxHqk02Vl923WVoU80d3ScTkZH2ZufX-4NFxW6_l15wtA3-EwW4jB14VooTHTmr7dV6qKG4P19qEJr5m-_I-QeW9RQO_RjnVuU2lywaN-KqNXHy-mGgRdu62qK89W8ulz6yGlcW7m5zdyze8aVb8eynbGhi1joffhk-Y1O5yyJouMBvN0tbG-n1BjSUGffzeOE5mOk-R_YnnmTg==/hy-vong-thanh-ca.jpg" data-alt="[Đồng Nhân Harry Potter] Hy Vọng Thánh Ca"></div>
								<div class="caption">
									<h3>[Đồng Nhân Harry Potter] Hy Vọng Thánh Ca</h3>
									<small class="btn-xs label-primary">Full - 103 chương</small>
								</div>
							</a>
						</div>
						<div class="col-xs-4 col-sm-3 col-md-2">
							<a href="https://truyenfull.vn/tien-si-that-nghiep/" title="Tiến Sĩ Thất Nghiệp">
								<div class="lazyimg" data-desk-image="https://static.8cache.com/cover/o/eJzLyTDW1031Tw7KKzBMzSoO1Q8zdHPKd80MDSzz1HeEAv_4fP0Ql1RDJ4vAxGAjE4My37RCA13vkFAv84hKIwPT_EQf43Rn53z9ckMzE90MIxNTAJjiGek=/tien-si-that-nghiep.jpg" data-image="https://static.8cache.com/cover/o/eJzLyTDW1031Tw7KKzBMzSoO1Q8zdHPKd80MDSzz1HeEAv_4fP0Ql1RDJ4vAxGAjE4My37RCA13vkFAv84hKIwPT_EQf43Rn53z9ckNDU90MQzNzAJjIGeg=/tien-si-that-nghiep.jpg" data-alt="Tiến Sĩ Thất Nghiệp"></div>
								<div class="caption">
									<h3>Tiến Sĩ Thất Nghiệp</h3>
									<small class="btn-xs label-primary">Full - 58 chương</small>
								</div>
							</a>
						</div>
						<div class="col-xs-4 col-sm-3 col-md-2">
							<a href="https://truyenfull.vn/vong-tinh-thuy-phien-ngoai-tam-the-tu-thiep/" title="Vong Tình Thủy – Phiên Ngoại Tam Thê Tứ Thiếp">
								<div class="lazyimg" data-desk-image="https://static.8cache.com/cover/eJzLyTDWT0nPLXSqDEvxMSksiDIJMAwr9PFPNkst8y4K8vUK8DYwKMhONwpycQ8M9I83TwkyMrZwLyoPdyuNTPM29XDySiw1SI9KL8oqzcsJsHQMCa9yj_S1LTc0M9HNMDIxBQAmpR9w/vong-tinh-thuy-phien-ngoai-tam-the-tu-thiep.jpg" data-image="https://static.8cache.com/cover/eJzLyTDWT0nPLXSqDEvxMSksiDIJMAwr9PFPNkst8y4K8vUK8DYwKMhONwpycQ8M9I83TwkyMrZwLyoPdyuNTPM29XDySiw1SI9KL8oqzcsJsHQMCa9yj_S1LTc0NNXNMDQzBwAmix9v/vong-tinh-thuy-phien-ngoai-tam-the-tu-thiep.jpg" data-alt="Vong Tình Thủy – Phiên Ngoại Tam Thê Tứ Thiếp"></div>
								<div class="caption">
									<h3>Vong Tình Thủy – Phiên Ngoại Tam Thê Tứ Thiếp</h3>
									<small class="btn-xs label-primary">Full - 48 chương</small>
								</div>
							</a>
						</div>
						<div class="col-xs-4 col-sm-3 col-md-2">
							<a href="https://truyenfull.vn/qua-khi-minh-tinh/" title="Quá Khí Minh Tinh">
								<div class="lazyimg" data-desk-image="https://static.8cache.com/cover/eJwNz0fWsjoAANAVeR5NyuANCF2qgghMOAJBCS1ikMDq_28H9w5v_r_PnXTBxddpJQAXUuiEdsA2Mv06D3RCh9ixdX4DCDJKjkJTu9ovvt8mpgaX1b0kgZYMelbGZSGtj02qUhZ3e-F5dUE5Lk9yEatyuFhpaXGw0wEnR2yOhXfIMJ-uc7tmrbcRk1U0krNZumdi0rqJQ8wyFfWId-C4CKAV8rtKtOyKTJdzjKbXF_M1tp75kbLZ3qZhaFdzjJsl-_kwVpOrPJereQAymZl4ubnliLHHl5wjI5B3ZSzO1-FPqKAUf3XIqFLi6fuPJ0kKivGTijdLIrBynvPqPN0lX7u5LgwhRrPyOsL9Qn4aMmZdl1cma-ZQ5Rg1BFpmAUZaVmT7J9DRDRlXfO9Rzr6UBlQZPsnF2tjsj-BeIuz0JRYXnu5Euu2C98wvs_tr9UpkTnq6e-3mjNeUDrtw3gQmXGrtEe2BjBXcub-A876EKdydhXYC33QKJ02doTXptu-H8jOBK1w8olV_xkfyV4th9c2j1CZY_JyH2fcRmZTUVEseowk7e0I0onuvcx-218KwkiB25vRxHDWlixpxVtQWNpv1nZmt4MjxV0z3iFHer2EZ73XNgMKgbgSG782w5VCnNj1mlk0pmq_sqjxfSzLDAJUt_fEWVOw02mYkV6my2lvPTGOvvE-4a43bYENNFvxNvFT2EKHRAlK6FwoCgbCr7TaUHV__v7GicHpzwvkfFe7s5Q==/qua-khi-minh-tinh.jpg" data-image="https://static.8cache.com/cover/eJwNz0nWc0oAANAV5TyFaAZvoCfahAgmTlASpatIiWL1_7eDe4c399_nTrrg4uu04lUXUuiEdgAaiX6dBzqhQ-hAnd9UBBk5R6GpXe0X128TU6uX1b0kgZYMelbGZSGuj02sUoC7vfC8uqAsmye5gBUpXKy0tFjY6SorRSDH_DtkmE_XuV2z1tuIySoYydks3TMxad3EIQZMRT3iHTguAmiF3K4QLbsi02Udo-n1xXyNrWd-xGy2t2kY2tUc42bJfj6MleQqzeVqHiqZzEy43NxyxNjjStaRkJp3ZSzM1-FPKKMUf3XIKGLi6fuPI0mqFuMnFW6WSGDlPOfVebpLvnZzXRh8jGb5dYT7hfw0ZMy6Lq1M1syhwjJKqGqZpTLisiLbP6kd3ZBxxfce5eAlN2qV4ZNUrI0NfgT3IgHTl1hseLoT8bbz3jO_zO6v1SuBOenp7rWbM15TOuz8eeOZcKm1R7QHEpZx5_4C1vsSpnB3AO0EvukUTpoyQ2vSbd8PpWcCV7h4RKv-jI_krxbD6ptHqU2w8DkPs-8jMsmpqZQcRhN29oRoRPde5z5sr4VhJUHszOnjOGpKFyViragtbJD1nZmt6pHjr5DuESO_X8My3uuaUQuDupE6fG-GLYU6tekxA5BSNF_BKj9fSzLDAJUt_XEWlO002mYkVam82lvPTGMvv0-4a43bYENN4v1NuFT2EKHRUsV0L2SkBvyutNtQdlz9_wbA-fQGgvgPFdTs5A==/qua-khi-minh-tinh.jpg" data-alt="Quá Khí Minh Tinh"></div>
								<div class="caption">
									<h3>Quá Khí Minh Tinh</h3>
									<small class="btn-xs label-primary">Full - 56 chương</small>
								</div>
							</a>
						</div>
						<div class="col-xs-4 col-sm-3 col-md-2">
							<a href="https://truyenfull.vn/ngu-ngon-hen-mai-nhe/" title="Ngủ Ngon, Hẹn Mai Nhé">
								<div class="lazyimg" data-desk-image="https://static.8cache.com/cover/o/eJzLyTDW17V0iw8IqSrKKkkJ1A8z8yjPyEr0dM3w1HeEgiCvbH3nxNCACGOzgqw8C7cUi7wwwxC_wBSfRK8kP6N47wLjiHJn53z9ckMzE90MIxNTALWFGtE=/ngu-ngon-hen-mai-nhe.jpg" data-image="https://static.8cache.com/cover/o/eJzLyTDW17V0iw8IqSrKKkkJ1A8z8yjPyEr0dM3w1HeEgiCvbH3nxNCACGOzgqw8C7cUi7wwwxC_wBSfRK8kP6N47wLjiHJn53z9ckNDU90MQzNzALVrGtA=/ngu-ngon-hen-mai-nhe.jpg" data-alt="Ngủ Ngon, Hẹn Mai Nhé"></div>
								<div class="caption">
									<h3>Ngủ Ngon, Hẹn Mai Nhé</h3>
									<small class="btn-xs label-primary">Full - 75 chương</small>
								</div>
							</a>
						</div>
						<div class="col-xs-4 col-sm-3 col-md-2">
							<a href="https://truyenfull.vn/bao-boi-bao-boi-cua-anh-hai/" title="Bảo Bối Bảo Bối Của Anh Hai">
								<div class="lazyimg" data-desk-image="https://static.8cache.com/cover/eJzLyTDWT6wMcI_wzvTyLrSssDTKq4ivqijO8XYLyCqLT3MqzDb3znRzzMk2MzMPNylIKXE2CKzK8dJN9QhwyszPNU1NcalMC_Lyzy6NCirUNTHSTct2d7QtNzQz0c0wMjEFADhZH5U=/bao-boi-bao-boi-cua-anh-hai.jpg" data-image="https://static.8cache.com/cover/eJzLyTDWT6wMcI_wzvTyLrSssDTKq4ivqijO8XYLyCqLT3MqzDb3znRzzMk2MzMPNylIKXE2CKzK8dJN9QhwyszPNU1NcalMC_Lyzy6NCirUNTHSTct2d7QtNzQ01c0wNDMHADg_H5Q=/bao-boi-bao-boi-cua-anh-hai.jpg" data-alt="Bảo Bối Bảo Bối Của Anh Hai"></div>
								<div class="caption">
									<h3>Bảo Bối Bảo Bối Của Anh Hai</h3>
									<small class="btn-xs label-primary">Full - 43 chương</small>
								</div>
							</a>
						</div>
						<div class="col-xs-4 col-sm-3 col-md-2">
							<a href="https://truyenfull.vn/mouthwatering/" title="Mouthwatering">
								<div class="lazyimg" data-desk-image="https://static.8cache.com/cover/eJzLyTDWd0sxLQ8pyfV3K6o0dK70qfDMSCnwsvDPSsqM94809baId8-IjMqzKPSKD_Ap8DMJMg8PNUsMDgm3qHQMSY8I9PP2M_KqKDd2SXXxzIiscgpwyQq0LTc0M9HNMDIxBQA44x9y/mouthwatering.jpg" data-image="https://static.8cache.com/cover/eJzLyTDWd0sxLQ8pyfV3K6o0dK70qfDMSCnwsvDPSsqM94809baId8-IjMqzKPSKD_Ap8DMJMg8PNUsMDgm3qHQMSY8I9PP2M_KqKDd2SXXxzIiscgpwyQq0LTc0NNXNMDQzBwA4yR9x/mouthwatering.jpg" data-alt="Mouthwatering"></div>
								<div class="caption">
									<h3>Mouthwatering</h3>
									<small class="btn-xs label-primary">Full - 8 chương</small>
								</div>
							</a>
						</div>
						<div class="col-xs-4 col-sm-3 col-md-2">
							<a href="https://truyenfull.vn/hoan-toan-ngoai-y-muon/" title="Hoàn Toàn Ngoài Ý Muốn">
								<div class="lazyimg" data-desk-image="https://static.8cache.com/cover/eJzLyTDWd_ZJdi72tKjIyS_z8M8wdzeJz_XO88t1qggOzHLN9s_wC_EyLDePDC0sCspIdHKML3AN8avw8qxIz6o0d00P8ywJLs-PcC33LfGKSksPyzcMKHK1LTc0M9HNMDIxBQBZvSC3/hoan-toan-ngoai-y-muon.jpg" data-image="https://static.8cache.com/cover/eJzLyTDWd_ZJdi72tKjIyS_z8M8wdzeJz_XO88t1qggOzHLN9s_wC_EyLDePDC0sCspIdHKML3AN8avw8qxIz6o0d00P8ywJLs-PcC33LfGKSksPyzcMKHK1LTc0NNXNMDQzBwBZoyC2/hoan-toan-ngoai-y-muon.jpg" data-alt="Hoàn Toàn Ngoài Ý Muốn"></div>
								<div class="caption">
									<h3>Hoàn Toàn Ngoài Ý Muốn</h3>
									<small class="btn-xs label-primary">Full - 6 chương</small>
								</div>
							</a>
						</div>
						<div class="col-xs-4 col-sm-3 col-md-2">
							<a href="https://truyenfull.vn/ngan-dieu-nu/" title="Ngân Điêu Nữ">
								<div class="lazyimg" data-desk-image="https://static.8cache.com/cover/o/eJzLyTDW180o8_f1K3et8tH11Q8rLI30CzE0yCrw1HeEAi8jE30LtxxfUyNHz6yKYv1yQzMT3QwjE1Ndz2QTIwCwzxNV/ngan-dieu-nu.jpg" data-image="https://static.8cache.com/cover/o/eJzLyTDW180o8_f1K3et8tH11Q8rLI30CzE0yCrw1HeEAi8jE30LtxxfUyNHz6yKYv1yQ0NT3QxDM3Ndz2QTIwCwsBNU/ngan-dieu-nu.jpg" data-alt="Ngân Điêu Nữ"></div>
								<div class="caption">
									<h3>Ngân Điêu Nữ</h3>
									<small class="btn-xs label-primary">Full - 18 chương</small>
								</div>
							</a>
						</div>
						<div class="col-xs-4 col-sm-3 col-md-2">
							<a href="https://truyenfull.vn/khi-quan-hon-gap-go-tinh-yeu/" title="Khi Quân Hôn Gặp Gỡ Tình Yêu">
								<div class="lazyimg" data-desk-image="https://static.8cache.com/cover/o/eJzLyTDR13W2LCn1M3QqNy7w1A8LDjVOcvM3Kor31HeEgtyMYv1Sr0jLksiwDK_AZP1yQzMT3QwjE1MATzUSig==/khi-quan-hon-gap-go-tinh-yeu.jpg" data-image="https://static.8cache.com/cover/o/eJzLyTDR13W2LCn1M3QqNy7w1A8LDjVOcvM3Kor31HeEgtyMYv1Sr0jLksiwDK_AZP1yQ0NT3QxDM3MATxsSiQ==/khi-quan-hon-gap-go-tinh-yeu.jpg" data-alt="Khi Quân Hôn Gặp Gỡ Tình Yêu"></div>
								<div class="caption">
									<h3>Khi Quân Hôn Gặp Gỡ Tình Yêu</h3>
									<small class="btn-xs label-primary">Full - 43 chương</small>
								</div>
							</a>
						</div>
						<div class="col-xs-4 col-sm-3 col-md-2">
							<a href="https://truyenfull.vn/nuong-tu-thinh-chi-giao-nhieu-hon/" title="Nương Tử, Thỉnh Chỉ Giáo Nhiều Hơn">
								<div class="lazyimg" data-desk-image="https://static.8cache.com/cover/o/eJzLyTDW163IjY90ykvJCw6I1A8rjEx2Cyx3LQr01HeEAk-vQP3EeKfw9Mwi9-yUZP1yQzMT3QwjE1Ndz2QTIwDdyxSe/nuong-tu-thinh-chi-giao-nhieu-hon.jpg" data-image="https://static.8cache.com/cover/o/eJzLyTDW163IjY90ykvJCw6I1A8rjEx2Cyx3LQr01HeEAk-vQP3EeKfw9Mwi9-yUZP1yQ0NT3QxDM3Ndz2QTIwDdrBSd/nuong-tu-thinh-chi-giao-nhieu-hon.jpg" data-alt="Nương Tử, Thỉnh Chỉ Giáo Nhiều Hơn"></div>
								<div class="caption">
									<h3>Nương Tử, Thỉnh Chỉ Giáo Nhiều Hơn</h3>
									<small class="btn-xs label-primary">Full - 8 chương</small>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer" class="footer">
			<div class="container">
				<div class="hidden-xs col-sm-5"><strong>Truyện Full</strong> - <a href="https://truyenfull.vn" title="Đọc truyện online">Đọc truyện</a> online, <a href="https://truyenfull.vn" title="Đọc truyện chữ">đọc truyện</a> chữ, <a href="https://truyenfull.vn" title="Truyện hay">truyện hay</a>. Website luôn cập nhật những bộ <a href="https://truyenfull.vn/danh-sach/truyen-moi/" title="Truyện mới">truyện mới</a> thuộc các thể loại đặc sắc như <a href="https://truyenfull.vn/the-loai/tien-hiep/" title="Truyện tiên hiệp">truyện tiên hiệp</a>, <a href="https://truyenfull.vn/the-loai/kiem-hiep/" title="Truyện kiếm hiệp">truyện kiếm hiệp</a>, hay <a href="https://truyenfull.vn/the-loai/ngon-tinh/" title="Truyện ngôn tình">truyện ngôn tình</a> một cách nhanh nhất. Hỗ trợ mọi thiết bị như di động và máy tính bảng.</div>
				<ul class="col-xs-12 col-sm-7 list-unstyled">
					<li class="text-right pull-right"><a href="https://truyenfull.vn/contact/" title="Contact">Contact</a> - <a href="https://truyenfull.vn/tos/" title="Terms of Service">ToS</a><a class="backtop" title="Trở lên đầu trang" href="#wrap" rel="nofollow" aria-label="Trở về đầu trang"><span class="glyphicon glyphicon-upload"></span></a> </li>
					<li class="hidden-xs tag-list"><a href="https://truyenfull.vn/danh-sach/dam-my-hai/" title="đam mỹ hài">đam mỹ hài</a> <a href="https://truyenfull.vn/the-loai/xuyen-nhanh/" title="truyện xuyên nhanh">truyện xuyên nhanh</a> <a href="https://truyenfull.vn/danh-sach/ngon-tinh-sung/" title="ngôn tình sủng">ngôn tình sủng</a> <a href="https://truyenfull.vn/danh-sach/ngon-tinh-hai/" title="ngôn tình hài">ngôn tình hài</a> <a href="https://truyenfull.vn/danh-sach/truyen-teen-hay/" title="truyện teen hay">truyện teen hay</a> <a href="https://truyenfull.vn/danh-sach/ngon-tinh-hay/" title="ngôn tình hay">ngôn tình hay</a> <a href="https://truyenfull.vn/the-loai/dam-my/" title="truyện đam mỹ">truyện đam mỹ</a> <a href="https://truyenfull.vn/the-loai/ngon-tinh/hoan/" title="truyện ngôn tình">truyện ngôn tình</a> <a href="https://truyenfull.vn/the-loai/ngon-tinh/hoan/" title="ngôn tình hoàn">ngôn tình hoàn</a> <a href="https://truyenfull.vn/danh-sach/ngon-tinh-nguoc/" title="ngôn tình ngược">ngôn tình ngược</a> <a href="https://truyenfull.vn/danh-sach/kiem-hiep-hay/" title="truyện kiếm hiệp hay">truyện kiếm hiệp hay</a> <a href="https://truyenfull.vn/danh-sach/tien-hiep-hay/" title="truyện tiên hiệp hay">truyện tiên hiệp hay</a> <a href="https://truyenfull.vn/the-loai/he-thong/" title="truyện hệ thống">truyện hệ thống</a></li>
				</ul>
			</div>
		</div>
		<script src="https://static.8cache.com/min/g/mainjs-030920.js"></script>
		<noscript>
			<link rel="stylesheet" type="text/css" href="{{asset('themes/themes2.css')}}"/>
		</noscript>
		<script>$('head').append('<link rel="stylesheet" type="text/css" href="{{asset('themes/themes.css')}}"/>');</script>
	</body>
</html>
