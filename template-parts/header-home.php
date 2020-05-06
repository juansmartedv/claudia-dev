<section class="header">
  <div class="container-fluid px-0 custom-overflow">
    <div class="row no-gutters align-items-center">
      <div class="col-md-7">
        <div class="custom-pic" style="background: url('<?php 
          $img = get_field('header_image','option');
        if ( $img ){
          the_field('header_image', 'option');
        } else {
          echo img_path . '395250-10151188806805188-847040187-22945960-631245420-n.jpg';
        }
        
        ?>')">
        </div>
      </div>

      <div class="col-md-5">
        <div class="content py-5" >
          <?php the_field('titulo','option'); ?>
          <?php the_field('subtitulo', 'option'); ?>

          <div class="brand">
            <?php the_field('slogan', 'option') ?>
          </div>
          <div class="row">
            <div class="col">
              <div class="social">
                <a href="https://wa.me/<?php the_field('whatsapp_number','option')?>?text=<?php $msg = get_field('whatsapp_chat_text','option'); echo urlencode($msg); ?>" class="link" target="_blank">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      width="18.357px" height="18.355px" viewBox="0 0 18.357 18.355" enable-background="new 0 0 18.357 18.355" xml:space="preserve">
                    <g>
                      <g>
                        <path fill="#082F50" d="M9.18,0H9.176C4.115-0.002,0,4.115,0,9.178c0,2.008,0.646,3.869,1.748,5.379l-1.145,3.41l3.527-1.127
                          c1.451,0.961,3.184,1.516,5.049,1.516c5.063,0,9.178-4.117,9.178-9.178S14.242,0,9.18,0z M14.521,12.961
                          c-0.221,0.625-1.1,1.145-1.801,1.295c-0.48,0.102-1.107,0.184-3.215-0.689c-2.697-1.119-4.436-3.859-4.57-4.039
                          c-0.129-0.176-1.09-1.451-1.09-2.768c0-1.318,0.668-1.957,0.938-2.232c0.223-0.227,0.588-0.33,0.939-0.33
                          c0.113,0,0.215,0.006,0.307,0.012c0.27,0.01,0.404,0.025,0.584,0.451c0.221,0.535,0.76,1.852,0.824,1.986
                          c0.066,0.135,0.131,0.318,0.039,0.496C7.391,7.326,7.314,7.408,7.18,7.564S6.916,7.84,6.781,8.008
                          c-0.125,0.145-0.266,0.303-0.109,0.57c0.156,0.264,0.695,1.145,1.49,1.852c1.023,0.912,1.855,1.203,2.152,1.326
                          c0.221,0.094,0.484,0.072,0.646-0.102c0.205-0.221,0.459-0.588,0.717-0.949c0.184-0.26,0.416-0.291,0.658-0.199
                          c0.248,0.086,1.561,0.734,1.83,0.867c0.27,0.137,0.447,0.199,0.512,0.314C14.742,11.801,14.742,12.334,14.521,12.961z"/>
                      </g>
                    </g>
                  </svg>
                </a>

                <a href="https://instagram.com/<?php the_field('instagram', 'option'); ?>" class="link">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      width="16.566px" height="16.568px" viewBox="0 0 16.566 16.568" enable-background="new 0 0 16.566 16.568" xml:space="preserve">
                    <g>
                      <g>
                        <g>
                          <g>
                            <path fill="#082F50" d="M11.389,0H5.178C2.318,0,0,2.32,0,5.178v6.213c0,2.859,2.318,5.178,5.178,5.178h6.211
                              c2.859,0,5.178-2.318,5.178-5.178V5.178C16.566,2.32,14.248,0,11.389,0z M15.014,11.391c0,1.998-1.627,3.625-3.625,3.625H5.178
                              c-2,0-3.625-1.627-3.625-3.625V5.178c0-1.998,1.625-3.625,3.625-3.625h6.211c1.998,0,3.625,1.627,3.625,3.625V11.391z"/>
                          </g>
                        </g>
                        <g>
                          <g>
                            <path fill="#082F50" d="M8.283,4.141c-2.287,0-4.143,1.857-4.143,4.143c0,2.289,1.855,4.143,4.143,4.143
                              s4.143-1.854,4.143-4.143C12.426,5.998,10.57,4.141,8.283,4.141z M8.283,10.873c-1.428,0-2.588-1.162-2.588-2.59
                              c0-1.426,1.16-2.59,2.588-2.59s2.588,1.164,2.588,2.59C10.871,9.711,9.711,10.873,8.283,10.873z"/>
                          </g>
                        </g>
                        <g>
                          <g>
                            <circle fill="#082F50" cx="12.734" cy="3.831" r="0.552"/>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </a>


                <a href="https://linkedin.com/in/<?php the_field('linkedin', 'option'); ?>" class="link">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      width="17.777px" height="16.992px" viewBox="0 0 17.777 16.992" enable-background="new 0 0 17.777 16.992" xml:space="preserve">
                    <g>
                      <g>
                        <path fill="#082F50" d="M2.156,0C0.854,0,0,0.855,0,1.98c0,1.102,0.828,1.982,2.107,1.982h0.023c1.328,0,2.156-0.881,2.156-1.982
                          C4.262,0.855,3.459,0,2.156,0z"/>
                        <path fill="#082F50" d="M0.227,5.527h3.811v11.465H0.227V5.527z"/>
                        <path fill="#082F50" d="M13.391,5.258c-2.057,0-3.434,1.932-3.434,1.932V5.527H6.145v11.465h3.813V10.59
                          c0-0.344,0.023-0.686,0.125-0.932c0.275-0.684,0.902-1.393,1.955-1.393c1.379,0,1.93,1.051,1.93,2.594v6.133h3.811v-6.574
                          C17.777,6.896,15.898,5.258,13.391,5.258z"/>
                      </g>
                    </g>
                  </svg>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
