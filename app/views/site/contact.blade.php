@extends('site.layout.default', array('pageContact'=>1))

@section('title')
    {{ $title = 'Liên hệ' }}
@stop

@section('content')

<!--========================================================
													CONTENT 
=========================================================-->
<section id="content" class="content_pages">

	<div class="container">
		
		<div class="row">
			<div class="grid_6 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.0s">
				<p class="txt4 color4 marTop9">Thông tin<br><span class="colorff8401">Liên hệ</span></p>

				<div class="map">
					<figure class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>
					</figure>

					<address class="address1">
						{{ $configSite->company_contact }}
					</address>
				</div>

			</div>

			<div class="grid_6">
				<p class="txt4 color4 marTop9">Gửi<br><span class="colorff8401">Liên hệ</span></p>

				<form id="contact-form">
					<div class="contact-form-loader"></div>
					<fieldset>
						<label class="name">
							<input type="text" name="name" placeholder="Họ tên" value="" data-constraints="@Required @JustLetters"  />
							<span class="empty-message">Trường có dấu * là bắt buộc.</span>
							<span class="error-message">*This is not a valid name.</span>
						</label>
					 
						<label class="email">
							<input type="text" name="email" placeholder="E-mail" value="" data-constraints="@Required @Email" />
							<span class="empty-message">Trường có dấu * là bắt buộc.</span>
							<span class="error-message">*This is not a valid email.</span>
						</label>
						<label class="phone">
							<input type="text" name="phone" placeholder="Điện thoại" value="" data-constraints="@Required @JustNumbers" />
							<span class="empty-message">Trường có dấu * là bắt buộc.</span>
							<span class="error-message">*This is not a valid phone.</span>
						</label>
					 
						<label class="message">
							<textarea name="message" placeholder="Tin nhắn" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
							<span class="empty-message">Trường có dấu * là bắt buộc.</span>
							<span class="error-message">*The message is too short.</span>
						</label>
						<div class="btns">
							<!-- <a href="#" class="more_btn" data-type="reset">Clear</a> -->
							<a href="#" class="more_btn3" data-type="submit">Gửi</a>
						</div>
					</fieldset> 
					<div class="modal fade response-message">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Modal title</h4>
								</div>
								<div class="modal-body">
									You message has been sent! We will be in touch soon.
								</div>      
							</div>
						</div>
					</div>
				</form>

			</div>

		</div>
	</div>

</section>

@stop