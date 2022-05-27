@extends('layout.main')

@section('title',"Автошлифовка в Курске - Все виды работ по шлифовке")
@section('content')
    


      <main id="main" class="site-main clr" role="main">

        <div data-elementor-type="wp-page" data-elementor-id="2" class="elementor elementor-2"
          data-elementor-settings="[]">

          <div class="elementor-section-wrap">

            @include('part.mainheader')
            @include('part.preim')
            @include('part.hard_auto')
            @include('part.work_type')
            
            

            <section
              class="has_eae_slider elementor-section elementor-top-section elementor-element elementor-element-7371ad8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="7371ad8" data-element_type="section">
              <div class="elementor-container elementor-column-gap-default">
                <div
                  class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8a33fa3"
                  data-id="8a33fa3" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-6b86937 elementor-widget elementor-widget-accordion"
                      data-id="6b86937" data-element_type="widget" data-widget_type="accordion.default">
                      <div class="elementor-widget-container">
                        <div class="elementor-accordion" role="tablist">
                          <div class="elementor-accordion-item">
                            <div id="elementor-tab-title-1121" class="elementor-tab-title" data-tab="1" role="tab"
                              aria-controls="elementor-tab-content-1121" aria-expanded="false">
                              <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
                                <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
                                <span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
                              </span>
                              <a class="elementor-accordion-title" href="">Фрезеровка головки блока цилиндров</a>
                            </div>
                            <div id="elementor-tab-content-1121" class="elementor-tab-content elementor-clearfix"
                              data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-1121">
                              <table>
                                <tbody>
                                  <tr>
                                    <td><b>№</b></td>
                                    <td><b>Наименование</b></td>
                                    <td><b>Цена</b></td>
                                  </tr>
                                  <tr>
                                    <td>1</td>
                                    <td>ВАЗ, Москвич</td>
                                    <td>1500</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>ЗИЛ, ГАЗ 406, 402, 53</td>
                                    <td>1600</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>Трактора, ЯМЗ 236</td>
                                    <td>2000</td>
                                  </tr>
                                  <tr>
                                    <td>5</td>
                                    <td>Иномарки (за цилиндр)</td>
                                    <td>600</td>
                                  </tr>
                                  <tr>
                                    <td>6</td>
                                    <td>Иномарки чугун (за цилиндр)</td>
                                    <td>700</td>
                                  </tr>
                                  <tr>
                                    <td>7</td>
                                    <td>Иномарки с форкамерами (за цилиндр)</td>
                                    <td>900</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="elementor-accordion-item">
                            <div id="elementor-tab-title-1122" class="elementor-tab-title" data-tab="2" role="tab"
                              aria-controls="elementor-tab-content-1122" aria-expanded="false">
                              <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
                                <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
                                <span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
                              </span>
                              <a class="elementor-accordion-title" href="">Ремонт верхней части шатуна</a>
                            </div>
                            <div id="elementor-tab-content-1122" class="elementor-tab-content elementor-clearfix"
                              data-tab="2" role="tabpanel" aria-labelledby="elementor-tab-title-1122">
                              <table>
                                <tbody>
                                  <tr>
                                    <td>
                                      <p><b>№</b></p>
                                    </td>
                                    <td>
                                      <p><b>Наименование</b></p>
                                    </td>
                                    <td>
                                      <p><b>Цена</b></p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <p>1</p>
                                    </td>
                                    <td>
                                      <p>ВАЗ, ГАЗ, Москвич</p>
                                    </td>
                                    <td>
                                      <p>500</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <p>2</p>
                                    </td>
                                    <td>
                                      <p>Трактора, ЯМЗ, КАМАЗ, ЗИЛ</p>
                                    </td>
                                    <td>
                                      <p>1000</p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="elementor-accordion-item">
                            <div id="elementor-tab-title-1123" class="elementor-tab-title" data-tab="3" role="tab"
                              aria-controls="elementor-tab-content-1123" aria-expanded="false">
                              <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
                                <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
                                <span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
                              </span>
                              <a class="elementor-accordion-title" href="">Ремонт нижней части шатуна</a>
                            </div>
                            <div id="elementor-tab-content-1123" class="elementor-tab-content elementor-clearfix"
                              data-tab="3" role="tabpanel" aria-labelledby="elementor-tab-title-1123">
                              <table>
                                <tbody>
                                  <tr>
                                    <td><b>№</b></td>
                                    <td><b>Наименование</b></td>
                                    <td><b>Цена</b></td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>КАМАЗ</td>
                                    <td>1500</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="elementor-accordion-item">
                            <div id="elementor-tab-title-1124" class="elementor-tab-title" data-tab="4" role="tab"
                              aria-controls="elementor-tab-content-1124" aria-expanded="false">
                              <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
                                <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
                                <span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
                              </span>
                              <a class="elementor-accordion-title" href="">Ремонт постели коленвала</a>
                            </div>
                            <div id="elementor-tab-content-1124" class="elementor-tab-content elementor-clearfix"
                              data-tab="4" role="tabpanel" aria-labelledby="elementor-tab-title-1124">
                              <table>
                                <tbody>
                                  <tr>
                                    <td><b>№</b></td>
                                    <td><b>Наименование</b></td>
                                    <td><b>Цена</b></td>
                                  </tr>
                                  <tr>
                                    <td>1</td>
                                    <td>ВАЗ, Москвич</td>
                                    <td>4500</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>ЗИЛ, ГАЗ</td>
                                    <td>6500</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>ЯМЗ 238, КАМАЗ, А41</td>
                                    <td>15500</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>ЯМЗ 236, трактора</td>
                                    <td>13500</td>
                                  </tr>
                                  <tr>
                                    <td>5</td>
                                    <td>МТЗ</td>
                                    <td>7500</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="elementor-accordion-item">
                            <div id="elementor-tab-title-1125" class="elementor-tab-title" data-tab="5" role="tab"
                              aria-controls="elementor-tab-content-1125" aria-expanded="false">
                              <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
                                <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
                                <span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
                              </span>
                              <a class="elementor-accordion-title" href="">Ремонт постели распредвала</a>
                            </div>
                            <div id="elementor-tab-content-1125" class="elementor-tab-content elementor-clearfix"
                              data-tab="5" role="tabpanel" aria-labelledby="elementor-tab-title-1125">
                              <table>
                                <tbody>
                                  <tr>
                                    <td>
                                      <p><b>№</b></p>
                                    </td>
                                    <td>
                                      <p><b>Наименование</b></p>
                                    </td>
                                    <td>
                                      <p><b>Цена</b></p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <p>1</p>
                                    </td>
                                    <td>
                                      <p>ГАЗ 53, ЗИЛ, трактора</p>
                                    </td>
                                    <td>
                                      <p>5500</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <p>2</p>
                                    </td>
                                    <td>
                                      <p>КАМАЗ, ЯМЗ 236, 238</p>
                                    </td>
                                    <td>
                                      <p>5500</p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="elementor-accordion-item">
                            <div id="elementor-tab-title-1126" class="elementor-tab-title" data-tab="6" role="tab"
                              aria-controls="elementor-tab-content-1126" aria-expanded="false">
                              <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
                                <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
                                <span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
                              </span>
                              <a class="elementor-accordion-title" href="">Мойка</a>
                            </div>
                            <div id="elementor-tab-content-1126" class="elementor-tab-content elementor-clearfix"
                              data-tab="6" role="tabpanel" aria-labelledby="elementor-tab-title-1126">
                              <table>
                                <tbody>
                                  <tr>
                                    <td>
                                      <p><b>№</b></p>
                                    </td>
                                    <td>
                                      <p><b>Наименование</b></p>
                                    </td>
                                    <td>
                                      <p><b>Цена</b></p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <p>1</p>
                                    </td>
                                    <td>
                                      <p>ГБЦ Москвич, ВАЗ, ГАЗ, ЗИЛ</p>
                                    </td>
                                    <td>
                                      <p>450</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <p>2</p>
                                    </td>
                                    <td>
                                      <p>Блок ВАЗ, ГБЦ иномарка</p>
                                    </td>
                                    <td>
                                      <p>500</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <p>3</p>
                                    </td>
                                    <td>
                                      <p>Бок ГАЗ 53, Блок иномарка</p>
                                    </td>
                                    <td>
                                      <p>700/600</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <p>4</p>
                                    </td>
                                    <td>
                                      <p>Блок ГАЗ 402, 406, ГБЦ МТЗ, ЯМЗ</p>
                                    </td>
                                    <td>
                                      <p>550</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <p>5</p>
                                    </td>
                                    <td>
                                      <p>Комплект ВАЗ</p>
                                    </td>
                                    <td>
                                      <p>1500</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <p>6</p>
                                    </td>
                                    <td>
                                      <p>Комплект ГАЗ 402, 406, иномарка</p>
                                    </td>
                                    <td>
                                      <p>2000</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <p>7</p>
                                    </td>
                                    <td>
                                      <p>Комплект ГАЗ 53, Форд</p>
                                    </td>
                                    <td>
                                      <p>2500</p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="elementor-accordion-item">
                            <div id="elementor-tab-title-1127" class="elementor-tab-title" data-tab="7" role="tab"
                              aria-controls="elementor-tab-content-1127" aria-expanded="false">
                              <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
                                <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
                                <span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
                              </span>
                              <a class="elementor-accordion-title" href="">ВАЗ</a>
                            </div>
                            <div id="elementor-tab-content-1127" class="elementor-tab-content elementor-clearfix"
                              data-tab="7" role="tabpanel" aria-labelledby="elementor-tab-title-1127">
                              <table>
                                <tbody>
                                  <tr>
                                    <td><b>№</b></td>
                                    <td><b>Наименование</b></td>
                                    <td><b>Цена</b></td>
                                  </tr>
                                  <tr>
                                    <td>1</td>
                                    <td>Расточка и платохонингование блока</td>
                                    <td>2200</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Расточка и платохонингование блока под 79-82</td>
                                    <td>2500</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>Колен. вал</td>
                                    <td>1800</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>Чистка колен. вала</td>
                                    <td>350</td>
                                  </tr>
                                  <tr>
                                    <td>5</td>
                                    <td>Гильзовка и платохонингование блока</td>
                                    <td>3600</td>
                                  </tr>
                                  <tr>
                                    <td>6</td>
                                    <td>Замена вклад. пром. вала</td>
                                    <td>500</td>
                                  </tr>
                                  <tr>
                                    <td>7</td>
                                    <td>Перепрессовка поршней ВАЗ</td>
                                    <td>1200</td>
                                  </tr>
                                  <tr>
                                    <td>8</td>
                                    <td>Частичная сборка двигателя ВАЗ</td>
                                    <td>2000</td>
                                  </tr>
                                  <tr>
                                    <td>9</td>
                                    <td>Ремонт ГБЦ без замены направляющих 01</td>
                                    <td>2500</td>
                                  </tr>
                                  <tr>
                                    <td>10</td>
                                    <td>Ремонт ГБЦ с регулировкой клапанов с заменой направляющих 08</td>
                                    <td>3000</td>
                                  </tr>
                                  <tr>
                                    <td>11</td>
                                    <td>Опрессовка ГБЦ</td>
                                    <td>1500</td>
                                  </tr>
                                  <tr>
                                    <td>12</td>
                                    <td>Опрессовка блока</td>
                                    <td>1500</td>
                                  </tr>
                                  <tr>
                                    <td>13</td>
                                    <td>Замена седла клапана</td>
                                    <td>300</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="elementor-accordion-item">
                            <div id="elementor-tab-title-1128" class="elementor-tab-title" data-tab="8" role="tab"
                              aria-controls="elementor-tab-content-1128" aria-expanded="false">
                              <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
                                <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
                                <span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
                              </span>
                              <a class="elementor-accordion-title" href="">Москвич</a>
                            </div>
                            <div id="elementor-tab-content-1128" class="elementor-tab-content elementor-clearfix"
                              data-tab="8" role="tabpanel" aria-labelledby="elementor-tab-title-1128">
                              <table>
                                <tbody>
                                  <tr>
                                    <td><b>№</b></td>
                                    <td><b>Наименование</b></td>
                                    <td><b>Цена</b></td>
                                  </tr>
                                  <tr>
                                    <td>1</td>
                                    <td>Шлифовка колен. вала</td>
                                    <td>1800</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Шлифовка распред. вала</td>
                                    <td>500</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>Втулки распред. вала</td>
                                    <td>750</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="elementor-accordion-item">
                            <div id="elementor-tab-title-1129" class="elementor-tab-title" data-tab="9" role="tab"
                              aria-controls="elementor-tab-content-1129" aria-expanded="false">
                              <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
                                <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
                                <span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
                              </span>
                              <a class="elementor-accordion-title" href="">ОКА</a>
                            </div>
                            <div id="elementor-tab-content-1129" class="elementor-tab-content elementor-clearfix"
                              data-tab="9" role="tabpanel" aria-labelledby="elementor-tab-title-1129">
                              <table>
                                <tbody>
                                  <tr>
                                    <td>
                                      <p><b>№</b></p>
                                    </td>
                                    <td>
                                      <p><b>Наименование</b></p>
                                    </td>
                                    <td>
                                      <p><b>Цена</b></p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <p>1</p>
                                    </td>
                                    <td>
                                      <p>Расточка и платохонингование блока</p>
                                    </td>
                                    <td>
                                      <p>1200</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <p>2</p>
                                    </td>
                                    <td>
                                      <p>Колен. вал</p>
                                    </td>
                                    <td>
                                      <p>1200</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <p>3</p>
                                    </td>
                                    <td>
                                      <p>Ремонт ГБЦ с заменой направляющих</p>
                                    </td>
                                    <td>
                                      <p>1800</p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="elementor-accordion-item">
                            <div id="elementor-tab-title-11210" class="elementor-tab-title" data-tab="10" role="tab"
                              aria-controls="elementor-tab-content-11210" aria-expanded="false">
                              <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
                                <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
                                <span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
                              </span>
                              <a class="elementor-accordion-title" href="">Волга</a>
                            </div>
                            <div id="elementor-tab-content-11210" class="elementor-tab-content elementor-clearfix"
                              data-tab="10" role="tabpanel" aria-labelledby="elementor-tab-title-11210">
                              <table>
                                <tbody>
                                  <tr>
                                    <td><b>№</b></td>
                                    <td><b>Наименование</b></td>
                                    <td><b>Цена</b></td>
                                  </tr>
                                  <tr>
                                    <td>1</td>
                                    <td>Колен. вал. ГАЗ 402, 406</td>
                                    <td>3500</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Чистка колен. вала</td>
                                    <td>500</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>Гильзовка ГАЗ — 406</td>
                                    <td>5500</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>Расточка и платохонингование блока ГАЗ 406, УАЗ</td>
                                    <td>3500</td>
                                  </tr>
                                  <tr>
                                    <td>5</td>
                                    <td>Ремонт постели распред. вала ГАЗ 402, УАЗ</td>
                                    <td>4500</td>
                                  </tr>
                                  <tr>
                                    <td>6</td>
                                    <td>Замена втулок распред. вала ГАЗ 402, УАЗ</td>
                                    <td>3750</td>
                                  </tr>
                                  <tr>
                                    <td>7</td>
                                    <td>Шлифовка распред. вала</td>
                                    <td>1500</td>
                                  </tr>
                                  <tr>
                                    <td>8</td>
                                    <td>Ремонт ГБЦ без замены направляющих ГАЗ 402</td>
                                    <td>3500</td>
                                  </tr>
                                  <tr>
                                    <td>9</td>
                                    <td>Ремонт ГБЦ без замены направляющих ГАЗ 406</td>
                                    <td>4400</td>
                                  </tr>
                                  <tr>
                                    <td>10</td>
                                    <td>Опрессовка ГБЦ</td>
                                    <td>1700</td>
                                  </tr>
                                  <tr>
                                    <td>11</td>
                                    <td>Опрессовка блока УАЗ 100 л.с.</td>
                                    <td>2000</td>
                                  </tr>
                                  <tr>
                                    <td>12</td>
                                    <td>Замена седла клапана ГАЗ 402 — 400, ГАЗ 406</td>
                                    <td>300</td>
                                  </tr>
                                  <tr>
                                    <td>13</td>
                                    <td>Замена вклад. пром. вала ГАЗ 406</td>
                                    <td>1000</td>
                                  </tr>
                                  <tr>
                                    <td>14</td>
                                    <td>Частичная сборка моторов ГАЗ 402,406</td>
                                    <td>3000</td>
                                  </tr>
                                </tbody>
                              </table>
                              <p> </p>
                            </div>
                          </div>
                          <div class="elementor-accordion-item">
                            <div id="elementor-tab-title-11211" class="elementor-tab-title" data-tab="11" role="tab"
                              aria-controls="elementor-tab-content-11211" aria-expanded="false">
                              <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
                                <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
                                <span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
                              </span>
                              <a class="elementor-accordion-title" href="">Токарные работы</a>
                            </div>
                            <div id="elementor-tab-content-11211" class="elementor-tab-content elementor-clearfix"
                              data-tab="11" role="tabpanel" aria-labelledby="elementor-tab-title-11211">
                              <table>
                                <tbody>
                                  <tr>
                                    <td><b>№</b></td>
                                    <td><b>Наименование</b></td>
                                    <td><b>Цена</b></td>
                                  </tr>
                                  <tr>
                                    <td>1</td>
                                    <td>Восстановление маслосгонной резьбы колен. вала</td>
                                    <td>350</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Установка ввертыша свечи</td>
                                    <td>350</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>МОТО 1 цилиндр</td>
                                    <td>1000</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="elementor-accordion-item">
                            <div id="elementor-tab-title-11212" class="elementor-tab-title" data-tab="12" role="tab"
                              aria-controls="elementor-tab-content-11212" aria-expanded="false">
                              <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
                                <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
                                <span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
                              </span>
                              <a class="elementor-accordion-title" href="">ГАЗ 52, ЗИЛ, ГАЗ 53</a>
                            </div>
                            <div id="elementor-tab-content-11212" class="elementor-tab-content elementor-clearfix"
                              data-tab="12" role="tabpanel" aria-labelledby="elementor-tab-title-11212">
                              <table>
                                <tbody>
                                  <tr>
                                    <td><b>№</b></td>
                                    <td><b>Наименование</b></td>
                                    <td><b>Цена</b></td>
                                  </tr>
                                  <tr>
                                    <td>1</td>
                                    <td>Колен. вал</td>
                                    <td>4500</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Чистка колен. вала</td>
                                    <td>500</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>Ремонт ГБЦ без замены направляющих</td>
                                    <td>3650</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>Замена седла клапана</td>
                                    <td>400</td>
                                  </tr>
                                  <tr>
                                    <td>5</td>
                                    <td>Шлифовка распред. вала</td>
                                    <td>1500</td>
                                  </tr>
                                  <tr>
                                    <td>6</td>
                                    <td>Опресовка ГБЦ ГАЗ 53, ЗИЛ</td>
                                    <td>1700</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="elementor-accordion-item">
                            <div id="elementor-tab-title-11213" class="elementor-tab-title" data-tab="13" role="tab"
                              aria-controls="elementor-tab-content-11213" aria-expanded="false">
                              <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
                                <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
                                <span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
                              </span>
                              <a class="elementor-accordion-title" href="">Легковые иномарки</a>
                            </div>
                            <div id="elementor-tab-content-11213" class="elementor-tab-content elementor-clearfix"
                              data-tab="13" role="tabpanel" aria-labelledby="elementor-tab-title-11213">
                              <table>
                                <tbody>
                                  <tr>
                                    <td><b>№</b></td>
                                    <td><b>Наименование</b></td>
                                    <td><b>Цена</b></td>
                                  </tr>
                                  <tr>
                                    <td>1</td>
                                    <td>Колен. вал. 4 цилиндра/5-8 цилиндров</td>
                                    <td>4000/5000</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Расточка и платохонингование блока 1 цилиндр</td>
                                    <td>1200</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>Гильзовка и платохонингование блока 1 цилиндр</td>
                                    <td>2000</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>V &#8212; образный расточка и платохонингование блока 1 цилиндр</td>
                                    <td>2000</td>
                                  </tr>
                                  <tr>
                                    <td>5</td>
                                    <td>Ремонт ГБЦ иномарка 1 клапана</td>
                                    <td>650</td>
                                  </tr>
                                  <tr>
                                    <td>6</td>
                                    <td>Регулировка клапанов 8клап.</td>
                                    <td>2500</td>
                                  </tr>
                                  <tr>
                                    <td>7</td>
                                    <td>Замена седла</td>
                                    <td>1000</td>
                                  </tr>
                                  <tr>
                                    <td>8</td>
                                    <td>Опрессовка ГБЦ/блока</td>
                                    <td>2000/2500</td>
                                  </tr>

                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="elementor-accordion-item">
                            <div id="elementor-tab-title-11214" class="elementor-tab-title" data-tab="14" role="tab"
                              aria-controls="elementor-tab-content-11214" aria-expanded="false">
                              <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
                                <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
                                <span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
                              </span>
                              <a class="elementor-accordion-title" href="">Высота блока более 180 мм</a>
                            </div>
                            <div id="elementor-tab-content-11214" class="elementor-tab-content elementor-clearfix"
                              data-tab="14" role="tabpanel" aria-labelledby="elementor-tab-title-11214">
                              <table>
                                <tbody>
                                  <tr>
                                    <td>
                                      <p><b>№</b></p>
                                    </td>
                                    <td>
                                      <p><b>Наименование</b></p>
                                    </td>
                                    <td>
                                      <p><b>Цена</b></p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <p>1</p>
                                    </td>
                                    <td>
                                      <p>Расточка и платохонингование блока 1 цилиндр</p>
                                    </td>
                                    <td>
                                      <p>2000</p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <p>2</p>
                                    </td>
                                    <td>
                                      <p>Гильзовка и платохонингование блока 1 цилиндр</p>
                                    </td>
                                    <td>
                                      <p>3000</p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="elementor-accordion-item">
                            <div id="elementor-tab-title-11215" class="elementor-tab-title" data-tab="15" role="tab"
                              aria-controls="elementor-tab-content-11215" aria-expanded="false">
                              <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
                                <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
                                <span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
                              </span>
                              <a class="elementor-accordion-title" href="">Коленчатые валы</a>
                            </div>
                            <div id="elementor-tab-content-11215" class="elementor-tab-content elementor-clearfix"
                              data-tab="15" role="tabpanel" aria-labelledby="elementor-tab-title-11215">
                              <table>
                                <tbody>
                                  <tr>
                                    <td><b>№</b></td>
                                    <td><b>Наименование</b></td>
                                    <td><b>Цена</b></td>
                                  </tr>
                                  <tr>
                                    <td>1</td>
                                    <td>А41, Д 3900, СМД, ЮМЗ</td>
                                    <td>5500</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>МТЗ—4ц, Т40/ Д25/ чистка</td>
                                    <td>4500/3500/500</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>СМД31</td>
                                    <td>8000</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>ЯМЗ 238, КАМАЗ, МТЗ, — 6ц</td>
                                    <td>7000</td>
                                  </tr>
                                  <tr>
                                    <td>5</td>
                                    <td>ЯМЗ 236</td>
                                    <td>6000</td>
                                  </tr>
                                  <tr>
                                    <td>6</td>
                                    <td>Иномарки 4 цилиндра/6 цилиндров/ цилиндров8</td>
                                    <td>8000/12000/15000</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="elementor-accordion-item">
                            <div id="elementor-tab-title-11216" class="elementor-tab-title" data-tab="16" role="tab"
                              aria-controls="elementor-tab-content-11216" aria-expanded="false">
                              <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
                                <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
                                <span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
                              </span>
                              <a class="elementor-accordion-title" href="">Ремонт ГБЦ грузовые</a>
                            </div>
                            <div id="elementor-tab-content-11216" class="elementor-tab-content elementor-clearfix"
                              data-tab="16" role="tabpanel" aria-labelledby="elementor-tab-title-11216">
                              <table>
                                <tbody>
                                  <tr>
                                    <td><b>№</b></td>
                                    <td><b>Наименование</b></td>
                                    <td><b>Цена</b></td>
                                  </tr>
                                  <tr>
                                    <td>1</td>
                                    <td>Ремонт ГБЦ МТЗ</td>
                                    <td>3980</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Ремонт ГБЦ КАМАЗ без замены направляющих</td>
                                    <td>1300</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>Опрессовка ГБЦ КАМАЗ</td>
                                    <td>500</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>Ремонт ЯМЗ без замены направляющих</td>
                                    <td>4580</td>
                                  </tr>
                                  <tr>
                                    <td>5</td>
                                    <td>Ремонт ГБЦ иномарка 1 -го клапана</td>
                                    <td>900</td>
                                  </tr>
                                  <tr>
                                    <td>6</td>
                                    <td>Замена седла клапана ЯМЗ/КАМАЗ</td>
                                    <td>500</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="elementor-accordion-item">
                            <div id="elementor-tab-title-11217" class="elementor-tab-title" data-tab="17" role="tab"
                              aria-controls="elementor-tab-content-11217" aria-expanded="false">
                              <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
                                <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
                                <span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
                              </span>
                              <a class="elementor-accordion-title" href="">Фрезеровка блоков и ГБЦ на станке "COMEC"
                                Италия</a>
                            </div>
                            <div id="elementor-tab-content-11217" class="elementor-tab-content elementor-clearfix"
                              data-tab="17" role="tabpanel" aria-labelledby="elementor-tab-title-11217">
                              <table>
                                <tbody>
                                  <tr>
                                    <td><b>№</b></td>
                                    <td><b>Наименование</b></td>
                                    <td><b>Цена</b></td>
                                  </tr>
                                  <tr>
                                    <td>1</td>
                                    <td>Фрезеровка плоскости Б/Ц грузовая иномарка</td>
                                    <td>5000</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Фрезеровка плоскости Б/Ц грузовая иномарка крупногабарит</td>
                                    <td>10000</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>Фрезеровка плоскости Б/Ц грузовая иномарка (1 цил.)</td>
                                    <td>800</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>Фрезеровка плоскости Б/Ц МТЗ</td>
                                    <td>3000</td>
                                  </tr>
                                  <tr>
                                    <td>5</td>
                                    <td>Фрезеровка плоскости ГБЦ ЯМЗ-238</td>
                                    <td>3000</td>
                                  </tr>

                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            @include('part.zap')
            @include('part.tseh')
            @include('part.contacts_in_main')
            @include('part.map_in_main')

          </div>
        </div>

      </main><!-- #main -->

@endsection