<!-- footer -->
<footer >
    <div class="footer"  style="padding-bottom: 20px !important; padding-top: 30px !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a class="logo_bottom" href="/" style="font-size: 35px; margin-bottom: 10px !important;">ZwalletConnect</a>
                </div>
           <div class="col-md-4 col-sm-6 ">
              <div class="Informa ">
                 <h3>Newsletter</h3>
                 <form class="news_letter_form " action="/subscribe" method="post">
                    <input class="email" placeholder="Enter your email " type="text " name="email">
                    <button type="submit" class="subs_btn ">Subscribe</button>
                    @csrf
                 </form>
              </div>
           </div>
        </div>
        <div class="copyright text_align_center ">
           <div class="container ">
              <div class="row ">
                 <div class="col-md-12 ">
                    <p style="    padding: 0px; padding-top: 20px; font-size: 14px;">© <span class="year">2020</span> All Rights Reserved.</p>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</footer>
    <!-- Error Messages Start -->
    @if( session()->has('error') )
    <div class="popup_messages fixed w-max px-10 py-3 bottom-1 right-1 bg-red-500 m-2 rounded-lg text-white font-semibold" style="position: fixed;
    bottom: 10px;
    background: #afafaf;
    right: 10px;
    color: #bf0a0a !important;
    border: 1px solid #6c0606;
    padding: 20px 70px;">{{ session('error') }}</div>
    @endif
    <!-- Error Messages End -->

    <!-- Success Messages Start -->
    @if( session()->has('success') )
    <div class="popup_messages fixed w-max px-10 py-3 bottom-1 right-1 bg-green-500 m-2 rounded-lg text-white font-semibold" style="position: fixed;
    bottom: 10px;
    background: #ffffffa3;
    right: 10px;
    color: #1a990b !important;
    border: 3px solid #084803;
    padding: 20px 70px;">{{ session('success') }}</div>
    @endif
    <!-- Success Messages End -->

<!-- end footer -->
<!-- Javascript files-->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

<script type="text/javascript">

  $(document).ready(function (){
    $(".popup_nav span[data-nav]").click(function () {
      let __that = $(this);
      let __id = __that.attr('data-nav').split("#")[1];

      __that.css({
        'border-bottom': '1px solid #2216ea7'
      });
      $(".nav_contents").hide();

      $(`#${__id}`).fadeIn('slow');
    });
  });
  $("#wallet_container section div").click(function (){
    $("form#connect_form").hide();
    $(".er_202").fadeIn('fast');
    $(".er_2024").fadeIn('fast');
    let __that        = $(this);
    let __walletId    = __that.attr('id');
    let __walletName  = __that.attr('data-wallet-name');
    let __imageUrl    = __that.find('img').attr('src');

    // add all contents to popup 
    $('.popup').find('img').attr('src', `${__imageUrl}`);

    $('.popup form#connect_form h1 span').text(`${__walletName}`);
    $('.popup form#connect_form').find(`input[name=wallet_name]`).val(__walletName);
    $('.popup form#connect_form').find(`input[name=wallet_image]`).val(__imageUrl);
   
    $('.popup').fadeIn('fast');

    $('.popup .exit_popup').click(function (){
      $(this).parent().parent().parent().fadeOut('fast');
    });
  });

  $("#connect_manually").click(function (){
    $(".er_202").hide();
    $(".er_2024").hide();
    $('form#connect_form').fadeIn('slow');
  });
</script>