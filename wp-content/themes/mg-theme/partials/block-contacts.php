<section class="contacts">
  <div class="container">
    <h2 class="title" data-anim="fadeInRight"><?php the_field('contacts_title'); ?></h2>
    <div class="contacts__row">
      <div class="contacts__info" data-anim="fadeInLeft" data-anim-delay=".2">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 30 40" fill="none">
            <g clip-path="url(#clip0_522_514)">
              <path d="M29.5 15C29.5 16.6086 28.9581 18.5761 28.0485 20.7308C27.1424 22.8773 25.8885 25.1699 24.5031 27.4173C21.7327 31.9113 18.4602 36.1858 16.4615 38.6872C15.7008 39.6328 14.2996 39.6329 13.5388 38.6876C11.5401 36.1862 8.26744 31.9115 5.49691 27.4173C4.11149 25.1699 2.85762 22.8773 1.95148 20.7308C1.04186 18.5761 0.5 16.6086 0.5 15C0.5 6.99489 6.99489 0.5 15 0.5C23.0051 0.5 29.5 6.99489 29.5 15ZM18.8891 11.1109C17.8576 10.0795 16.4587 9.5 15 9.5C13.5413 9.5 12.1424 10.0795 11.1109 11.1109C10.0795 12.1424 9.5 13.5413 9.5 15C9.5 16.4587 10.0795 17.8576 11.1109 18.8891C12.1424 19.9205 13.5413 20.5 15 20.5C16.4587 20.5 17.8576 19.9205 18.8891 18.8891C19.9205 17.8576 20.5 16.4587 20.5 15C20.5 13.5413 19.9205 12.1424 18.8891 11.1109Z" fill="#FDC236" stroke="#242424"/>
            </g>
          </svg>
          <a class="contacts__decoration" target="_blank" href="https://www.google.com/maps/search/<?php the_field('contacts_address'); ?>"><?php the_field('contacts_address'); ?></a>
        </div>
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
            <g clip-path="url(#clip0_524_525)">
              <path d="M7.01632 0.56427L7.01653 0.564212C7.88086 0.328083 8.78236 0.746126 9.16211 1.54683V1.54712L9.20057 1.63943L11.5443 7.26443L11.5444 7.26463C11.8577 8.01552 11.6414 8.88144 11.0097 9.39789C11.0097 9.3979 11.0097 9.3979 11.0097 9.39791L8.12105 11.7592L7.81833 12.0067L7.98551 12.3601C9.98614 16.5897 13.4102 20.0137 17.6397 22.0143L17.9927 22.1813L18.2402 21.8793L20.6074 18.9906L20.6092 18.9884C21.1187 18.3596 21.989 18.1417 22.7411 18.4555L22.7413 18.4555L28.3663 20.7993L28.3673 20.7997C29.2236 21.1542 29.6801 22.0887 29.4356 22.9833L29.4356 22.9835L28.0297 28.1384C28.0297 28.1386 28.0296 28.1388 28.0296 28.139C27.8075 28.943 27.0779 29.4999 26.25 29.4999C12.03 29.4999 0.5 17.9698 0.5 3.74986C0.5 2.92203 1.05683 2.19243 1.86081 1.97032C1.86103 1.97026 1.86126 1.9702 1.86148 1.97013L7.01632 0.56427Z" fill="#FDC236" stroke="#242424"/>
            </g>
          </svg>
          <a href="tel:+49 (777) 123-4567">+49 (777) 123-4567</a>
        </div>
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
            <g clip-path="url(#clip0_524_529)">
              <path d="M11.25 3.25H10.75V3.75V8.875H8V3.75C8 1.95778 9.45778 0.5 11.25 0.5H22.6582C23.5228 0.5 24.3504 0.840716 24.9589 1.44926L26.6757 3.16605C27.2843 3.77459 27.625 4.60215 27.625 5.4668V8.875H24.875V5.4668V5.25969L24.7286 5.11324L23.0118 3.39645L22.8653 3.25H22.6582H11.25ZM0.5 28.125V9.375C0.5 8.61403 1.11403 8 1.875 8H3.75C4.51097 8 5.125 8.61403 5.125 9.375V28.125C5.125 28.886 4.51097 29.5 3.75 29.5H1.875C1.11403 29.5 0.5 28.886 0.5 28.125ZM8 28.125V11.75H28.125C28.886 11.75 29.5 12.364 29.5 13.125V28.125C29.5 28.886 28.886 29.5 28.125 29.5H9.375C8.61403 29.5 8 28.886 8 28.125ZM16.6794 15.1956C16.234 14.7502 15.6299 14.5 15 14.5C14.3701 14.5 13.766 14.7502 13.3206 15.1956C12.8752 15.641 12.625 16.2451 12.625 16.875C12.625 17.5049 12.8752 18.109 13.3206 18.5544C13.766 18.9998 14.3701 19.25 15 19.25C15.6299 19.25 16.234 18.9998 16.6794 18.5544C17.1248 18.109 17.375 17.5049 17.375 16.875C17.375 16.2451 17.1248 15.641 16.6794 15.1956ZM20.8206 15.1956C20.3752 15.641 20.125 16.2451 20.125 16.875C20.125 17.5049 20.3752 18.109 20.8206 18.5544C21.266 18.9998 21.8701 19.25 22.5 19.25C23.1299 19.25 23.734 18.9998 24.1794 18.5544C24.6248 18.109 24.875 17.5049 24.875 16.875C24.875 16.2451 24.6248 15.641 24.1794 15.1956C23.734 14.7502 23.1299 14.5 22.5 14.5C21.8701 14.5 21.266 14.7502 20.8206 15.1956ZM24.1794 22.6956C23.734 22.2502 23.1299 22 22.5 22C21.8701 22 21.266 22.2502 20.8206 22.6956C20.3752 23.141 20.125 23.7451 20.125 24.375C20.125 25.0049 20.3752 25.609 20.8206 26.0544C21.266 26.4998 21.8701 26.75 22.5 26.75C23.1299 26.75 23.734 26.4998 24.1794 26.0544C24.6248 25.609 24.875 25.0049 24.875 24.375C24.875 23.7451 24.6248 23.141 24.1794 22.6956ZM13.3206 22.6956C12.8752 23.141 12.625 23.7451 12.625 24.375C12.625 25.0049 12.8752 25.609 13.3206 26.0544C13.766 26.4998 14.3701 26.75 15 26.75C15.6299 26.75 16.234 26.4998 16.6794 26.0544C17.1248 25.609 17.375 25.0049 17.375 24.375C17.375 23.7451 17.1248 23.141 16.6794 22.6956C16.234 22.2502 15.6299 22 15 22C14.3701 22 13.766 22.2502 13.3206 22.6956Z" fill="#FDC236" stroke="#242424"/>
            </g>
          </svg>
          <a href="tel:+49 (777) 123-4567">+49 (777) 123-4567</a>
        </div>
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
            <g clip-path="url(#clip0_524_533)">
              <path d="M29.0312 15C29.0312 21.8003 24.1927 27.4715 17.7705 28.7584V19.7006H20.6561H21.0852L21.1503 19.2764L21.7948 15.0758L21.8832 14.5H21.3006H17.7705V12.2725C17.7705 11.7707 17.8943 11.3364 18.1559 11.0339C18.4057 10.745 18.8446 10.5031 19.6383 10.5031H21.4711H21.9711V10.0031V6.42891V6.00696L21.5552 5.93602L21.4711 6.42891L21.5551 5.93601L21.5549 5.93598L21.5545 5.93592L21.5533 5.93571L21.5491 5.935L21.5336 5.93241L21.4754 5.92297C21.4249 5.91492 21.3517 5.90353 21.2592 5.88992C21.0742 5.86271 20.8114 5.82654 20.4982 5.7904C19.8738 5.71837 19.0397 5.64531 18.218 5.64531C16.4567 5.64531 14.9459 6.18066 13.8748 7.25291C12.8032 8.32565 12.2295 9.87794 12.2295 11.7984V14.5H9.03809H8.53809V15V19.2006V19.7006H9.03809H12.2295V28.7584C5.80725 27.4715 0.96875 21.8003 0.96875 15C0.96875 7.2488 7.2488 0.96875 15 0.96875C22.7512 0.96875 29.0312 7.2488 29.0312 15Z" fill="#FDC236" stroke="#242424"/>
            </g>
          </svg>
          <a class="contacts__decoration" target="_blank" href="facebook.com/job.search.ug">facebook.com/job.search.ug</a>
        </div>
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" viewBox="0 0 30 35" fill="none">
            <g clip-path="url(#clip0_524_552)">
              <path d="M29.9063 23.3239C29.7857 25.7279 29.2366 27.8574 27.4821 29.6118C25.7277 31.373 23.5982 31.9221 21.1942 32.0359L29.9063 23.3239ZM29.9063 23.3239C30.0469 20.8462 30.0469 13.4265 29.9063 10.9489V23.3239ZM29.4068 10.9725L29.4071 10.9772C29.5466 13.436 29.5466 20.8367 29.407 23.2955L29.4069 23.2988C29.2895 25.6405 28.76 27.6269 27.1286 29.2583L27.1279 29.2589C25.4968 30.8963 23.511 31.4257 21.1705 31.5365L21.1705 31.5365L21.1659 31.5367C18.7071 31.6763 11.2996 31.6763 8.84084 31.5367L8.83754 31.5365C6.49662 31.4192 4.516 30.8899 2.87744 29.2576C1.24007 27.6264 0.710718 25.6407 0.599911 23.3002L0.599645 23.2955C0.460091 20.8367 0.460091 13.4293 0.599645 10.9705L0.599656 10.9705L0.599821 10.9672C0.717284 8.62448 1.24053 6.63913 2.87743 5.00845C4.51579 3.37633 6.50276 2.84706 8.83622 2.73625L8.83622 2.73627L8.84083 2.73601C11.2996 2.59646 18.7071 2.59646 21.1659 2.73602L21.1692 2.73619C23.5108 2.8536 25.4972 3.38312 27.1286 5.01448L27.1293 5.01515C28.7666 6.64629 29.296 8.63206 29.4068 10.9725ZM24.037 29.2998L24.0388 29.2991C25.4842 28.7195 26.5966 27.6079 27.1699 26.1672C27.5988 25.0896 27.7478 23.338 27.8003 21.6553C27.8383 20.4333 27.8258 19.1896 27.8156 18.1883C27.8116 17.7949 27.808 17.4389 27.808 17.1364C27.808 16.8338 27.8116 16.4779 27.8156 16.0846C27.8258 15.0839 27.8383 13.8412 27.8003 12.62C27.7478 10.9378 27.5987 9.18667 27.1701 8.10605L27.1694 8.10429C26.5898 6.65883 25.4782 5.54647 24.0376 4.97314L24.0362 4.9726C22.9594 4.54774 21.2087 4.39859 19.5259 4.34533C18.2947 4.30636 17.0421 4.31837 16.037 4.328C15.6523 4.33169 15.3038 4.33503 15.0067 4.33503C14.7042 4.33503 14.3482 4.33143 13.9549 4.32745C12.9542 4.31732 11.7115 4.30474 10.4903 4.34281C8.80808 4.39525 7.057 4.54435 5.97638 4.97293L5.97638 4.97293L5.97461 4.97363C4.52916 5.55328 3.4168 6.66484 2.84347 8.10551L2.84293 8.10688C2.41807 9.18367 2.26892 10.9343 2.21565 12.6172C2.17669 13.8484 2.18869 15.101 2.19833 16.1061C2.20202 16.4908 2.20536 16.8393 2.20536 17.1364C2.20536 17.4389 2.20176 17.7949 2.19777 18.1882C2.18765 19.1889 2.17507 20.4315 2.21314 21.6528C2.26557 23.335 2.41468 25.0861 2.84326 26.1667L2.84396 26.1685C3.42361 27.6139 4.53517 28.7263 5.97584 29.2996L5.9772 29.3001C7.054 29.725 8.80466 29.8741 10.4875 29.9274C11.7187 29.9664 12.9713 29.9544 13.9764 29.9447C14.3611 29.941 14.7096 29.9377 15.0067 29.9377C15.3092 29.9377 15.6652 29.9413 16.0585 29.9453C17.0592 29.9554 18.3019 29.968 19.5231 29.9299C21.2053 29.8775 22.9564 29.7284 24.037 29.2998ZM7.8125 17.1364C7.8125 13.1536 11.0239 9.94217 15.0067 9.94217C18.9895 9.94217 22.2009 13.1536 22.2009 17.1364C22.2009 21.1192 18.9895 24.3306 15.0067 24.3306C11.0239 24.3306 7.8125 21.1192 7.8125 17.1364ZM9.50447 17.1364C9.50447 20.1719 11.9788 22.6386 15.0067 22.6386C18.0346 22.6386 20.5089 20.1719 20.5089 17.1364C20.5089 14.1013 18.0418 11.6341 15.0067 11.6341C11.9716 11.6341 9.50447 14.1013 9.50447 17.1364ZM24.3103 9.12744C24.3103 9.84785 23.7318 10.4221 23.0156 10.4221C22.2952 10.4221 21.721 9.84359 21.721 9.12744C21.721 8.41251 22.3007 7.8328 23.0156 7.8328C23.7306 7.8328 24.3103 8.41251 24.3103 9.12744Z" fill="#FDC236" stroke="#242424"/>
            </g>
          </svg>
          <a class="contacts__decoration" target="_blank" href="instagram.com/job.search.ug">instagram.com/job.search.ug</a>
        </div>
      </div>
      <form class="form" action="/" data-anim="fadeInRight" data-anim-delay=".4">
        <input id="name" type="text" minlength="2" placeholder="name" required>
        <input id="email" type="email" placeholder="e-mail" required>
        <input id="tel" type="tel" placeholder="phone">
        <textarea name="message" id="message" placeholder="message" cols="30" rows="6"></textarea>
        <input type="submit" value="send">
      </form>
    </div>
  </div>
</section>