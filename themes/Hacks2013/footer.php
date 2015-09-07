</div><!-- /#content -->

<footer id="site-info">
  <nav id="nav-legal">
    <ul>
      <li><a href="https://www.mozilla.org/ko/privacy-policy.html" rel="external">개인 정보 보호 정책</a></li>
      <li><a href="https://www.mozilla.org/ko/about/legal.html" rel="external">법적 고지</a></li>
      <li><a href="https://www.mozilla.org/ko/legal/fraud-report/" rel="external">상표권 침해 신고</a></li>
      <li><a href="http://forums.mozilla.or.kr" rel="external">한국 커뮤니티</a></li>
    </ul>
  </nav>

  <p id="copyright">
    <a href="http://aws.amazon.com/ko/what-is-cloud-computing?sc_icountry=KR&amp;sc_icampaigntype=devleoper_{{campaign.id}}"><img align="right" src="http://awsmedia
.s3.amazonaws.com/AWS_logo_poweredby_black_127px.png" alt="Powered by AWS Cloud Computing"></a> 별도의 고지가 없는 한, 본 사이트의 모든 콘텐츠는 <br /><a hr
ef="http://creativecommons.org/licenses/by-sa/3.0/" rel="license external">Creative Commons Attribution Share-Alike License v3.0</a> 라이센스 하에서 이용 가능합니다.
  </p>
  <nav id="nav-footer">
    <h5>hacks.mozilla.or.kr:</h5>
    <ul role="navigation">
      <li><a href="<?php bloginfo('url'); ?>">첫화면</a></li>
      <li><a href="<?php echo get_permalink(get_page_by_path('articles')->ID); ?>">기술 문서</a></li>
      <li><a href="<?php echo get_permalink(get_page_by_path('demos')->ID); ?>">구현 예제</a></li>
      <li><a href="<?php echo get_permalink(get_page_by_path('about')->ID); ?>">소개</a></li>
    </ul>
  </nav>
</footer>

<script src="https://www.mozilla.org/tabzilla/media/js/tabzilla.js"></script>
<script>
// <![CDATA[
  jQuery(document).ready(function(){
    jQuery(document.body).addClass("js");
  });
// ]]>
</script>

<?php wp_footer(); ?>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-53785-1']);
  _gaq.push(['_setDomainName', '.mozilla.or.kr']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</div>
</body>
</html>
