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

                                  @foreach ($works["Фрезеровка головки блока цилиндров"] as $work)
                                    <tr>
                                      <td>{{ $loop->index + 1 }}</td>
                                      <td>{{ $work->wokr }}</td>
                                      <td>{{ $work->price }}</td>
                                    </tr>
                                  @endforeach
                                  

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
                                    <td><b>№</b></td>
                                    <td><b>Наименование</b></td>
                                    <td><b>Цена</b></td>
                                  </tr>

                                  @foreach ($works["Ремонт верхней части шатуна"] as $work)
                                    <tr>
                                      <td>{{ $loop->index + 1 }}</td>
                                      <td>{{ $work->wokr }}</td>
                                      <td>{{ $work->price }}</td>
                                    </tr>
                                  @endforeach
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

                                  @foreach ($works["Ремонт нижней части шатуна"] as $work)
                                    <tr>
                                      <td>{{ $loop->index + 1 }}</td>
                                      <td>{{ $work->wokr }}</td>
                                      <td>{{ $work->price }}</td>
                                    </tr>
                                  @endforeach
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

                                  @foreach ($works["Ремонт постели коленвала"] as $work)
                                    <tr>
                                      <td>{{ $loop->index + 1 }}</td>
                                      <td>{{ $work->wokr }}</td>
                                      <td>{{ $work->price }}</td>
                                    </tr>
                                  @endforeach
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
                                    <td><b>№</b></td>
                                    <td><b>Наименование</b></td>
                                    <td><b>Цена</b></td>
                                  </tr>

                                  @foreach ($works["Ремонт постели распредвала"] as $work)
                                    <tr>
                                      <td>{{ $loop->index + 1 }}</td>
                                      <td>{{ $work->wokr }}</td>
                                      <td>{{ $work->price }}</td>
                                    </tr>
                                  @endforeach
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
                                    <td><b>№</b></td>
                                    <td><b>Наименование</b></td>
                                    <td><b>Цена</b></td>
                                  </tr>

                                  @foreach ($works["Мойка"] as $work)
                                    <tr>
                                      <td>{{ $loop->index + 1 }}</td>
                                      <td>{{ $work->wokr }}</td>
                                      <td>{{ $work->price }}</td>
                                    </tr>
                                  @endforeach
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

                                  @foreach ($works["ВАЗ"] as $work)
                                    <tr>
                                      <td>{{ $loop->index + 1 }}</td>
                                      <td>{{ $work->wokr }}</td>
                                      <td>{{ $work->price }}</td>
                                    </tr>
                                  @endforeach
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

                                  @foreach ($works["Москвич"] as $work)
                                    <tr>
                                      <td>{{ $loop->index + 1 }}</td>
                                      <td>{{ $work->wokr }}</td>
                                      <td>{{ $work->price }}</td>
                                    </tr>
                                  @endforeach
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
                                    <td><b>№</b></td>
                                    <td><b>Наименование</b></td>
                                    <td><b>Цена</b></td>
                                  </tr>

                                  @foreach ($works["ОКА"] as $work)
                                    <tr>
                                      <td>{{ $loop->index + 1 }}</td>
                                      <td>{{ $work->wokr }}</td>
                                      <td>{{ $work->price }}</td>
                                    </tr>
                                  @endforeach
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

                                  @foreach ($works["Волга"] as $work)
                                    <tr>
                                      <td>{{ $loop->index + 1 }}</td>
                                      <td>{{ $work->wokr }}</td>
                                      <td>{{ $work->price }}</td>
                                    </tr>
                                  @endforeach
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

                                  @foreach ($works["Токарные работы"] as $work)
                                    <tr>
                                      <td>{{ $loop->index + 1 }}</td>
                                      <td>{{ $work->wokr }}</td>
                                      <td>{{ $work->price }}</td>
                                    </tr>
                                  @endforeach
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

                                  @foreach ($works["ГАЗ 52, ЗИЛ, ГАЗ 53"] as $work)
                                    <tr>
                                      <td>{{ $loop->index + 1 }}</td>
                                      <td>{{ $work->wokr }}</td>
                                      <td>{{ $work->price }}</td>
                                    </tr>
                                  @endforeach
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

                                  @foreach ($works["Легковые иномарки"] as $work)
                                    <tr>
                                      <td>{{ $loop->index + 1 }}</td>
                                      <td>{{ $work->wokr }}</td>
                                      <td>{{ $work->price }}</td>
                                    </tr>
                                  @endforeach

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
                                    <td><b>№</b></td>
                                    <td><b>Наименование</b></td>
                                    <td><b>Цена</b></td>
                                  </tr>

                                  @foreach ($works["Высота блока более 180 мм"] as $work)
                                    <tr>
                                      <td>{{ $loop->index + 1 }}</td>
                                      <td>{{ $work->wokr }}</td>
                                      <td>{{ $work->price }}</td>
                                    </tr>
                                  @endforeach
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

                                  @foreach ($works["Коленчатые валы"] as $work)
                                    <tr>
                                      <td>{{ $loop->index + 1 }}</td>
                                      <td>{{ $work->wokr }}</td>
                                      <td>{{ $work->price }}</td>
                                    </tr>
                                  @endforeach
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

                                  @foreach ($works["Ремонт ГБЦ грузовые"] as $work)
                                    <tr>
                                      <td>{{ $loop->index + 1 }}</td>
                                      <td>{{ $work->wokr }}</td>
                                      <td>{{ $work->price }}</td>
                                    </tr>
                                  @endforeach
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

                                  @foreach ($works["Фрезеровка блоков и ГБЦ на станке 'COMEC' Италия"] as $work)
                                    <tr>
                                      <td>{{ $loop->index + 1 }}</td>
                                      <td>{{ $work->wokr }}</td>
                                      <td>{{ $work->price }}</td>
                                    </tr>
                                  @endforeach

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