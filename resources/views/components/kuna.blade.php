<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/kuna.css">
    <link rel="stylesheet" href="style/mediakuna.css">
    <link rel="stylesheet" href="style/mediaminw770.css">
    <link rel="stylesheet" href="style/mediakuna330.css">

    <link rel="stylesheet" href="font/stylesheet.css">

<?php  require_once ('index.php');
require_once ('api.php');
?>

    <title>KUNA</title>
  </head>
  <body>
      <div class="page__down">
          <button class="header__enter1-down">Создать аккаунт</button>
          <button class="enter1-down">Войти</button>
      </div>
      <div class="head">
        <div class="header">
            <div class="header__left">
              <div class="header__logo"><a>KUNA</a></div>
              <div class="hedaer__left-link">
                <span class="hedaer__left-text"> Торги </span>
                <span class="hedaer__left-text">
                  Продукты
                  <li class="dropdown">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="8"
                      height="8"
                      viewBox="0 0 8 8"
                      fill="none"
                    >
                      <g clip-path="url(#clip0)">
                        <path
                          d="M7.8515 3.89842C7.75261 3.79945 7.63538 3.75 7.49994 3.75L0.500038 3.75C0.364534 3.75 0.247392 3.79945 0.148419 3.89842C0.0494455 3.9975 0 4.11464 0 4.25006C0 4.38546 0.0494455 4.5026 0.148419 4.6016L3.64838 8.10156C3.74746 8.20054 3.86461 8.25009 4 8.25009C4.13539 8.25009 4.25265 8.20054 4.35154 8.10156L7.8515 4.60157C7.95036 4.5026 8 4.38546 8 4.25004C8 4.11464 7.95036 3.9975 7.8515 3.89842Z"
                          fill="#C6C9CF"
                        />
                      </g>
                      <defs>
                        <clipPath id="clip0">
                          <rect width="8" height="8" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </li>
                </span>
                <span class="hedaer__left-text"> Рефералка </span>
                <span class="hedaer__left-text1"> О нас </span>
              </div>
            </div>
      
            <div class="hedaer__right">
              <div class="header__language">
                <div class="lang">RU
                    <li class="dropdown">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="8"
                          height="8"
                          viewBox="0 0 8 8"
                          fill="none"
                        >
                          <g clip-path="url(#clip0)">
                            <path
                              d="M7.8515 3.89842C7.75261 3.79945 7.63538 3.75 7.49994 3.75L0.500038 3.75C0.364534 3.75 0.247392 3.79945 0.148419 3.89842C0.0494455 3.9975 0 4.11464 0 4.25006C0 4.38546 0.0494455 4.5026 0.148419 4.6016L3.64838 8.10156C3.74746 8.20054 3.86461 8.25009 4 8.25009C4.13539 8.25009 4.25265 8.20054 4.35154 8.10156L7.8515 4.60157C7.95036 4.5026 8 4.38546 8 4.25004C8 4.11464 7.95036 3.9975 7.8515 3.89842Z"
                              fill="#C6C9CF"
                            />
                          </g>
                          <defs>
                            <clipPath id="clip0">
                              <rect width="8" height="8" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </li>
                </div>
           
              </div>
              <div class="header__enter">Войти</div>
              <div class="header__create">
                <button>Создать аккаунт</button>
              </div>


                                  <div class="header__burger">
                    <button class="header__burger">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;width: 23px;height: 20px;" xml:space="preserve">
                                    <path d="M501.333,96H10.667C4.779,96,0,100.779,0,106.667s4.779,10.667,10.667,10.667h490.667c5.888,0,10.667-4.779,10.667-10.667    S507.221,96,501.333,96z"/>
                                    <path d="M501.333,245.333H10.667C4.779,245.333,0,250.112,0,256s4.779,10.667,10.667,10.667h490.667    c5.888,0,10.667-4.779,10.667-10.667S507.221,245.333,501.333,245.333z"/>
                                    <path d="M501.333,394.667H10.667C4.779,394.667,0,399.445,0,405.333C0,411.221,4.779,416,10.667,416h490.667    c5.888,0,10.667-4.779,10.667-10.667C512,399.445,507.221,394.667,501.333,394.667z"/>
                            </svg>
                    </button>
              </div>
              <div class="header__burger-menu">
                <div class="burger__close-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;width: 16px;height: 13px;" xml:space="preserve">
                        <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z"></path>
                </svg>
                </div>

                <div class="menu__burger-title">
                    <div class="menu__burger-close">
                     
                    </div>
                    <div class="header__enter1">Войти</div>
                    <div class="header__create1">
                      Создать аккаунт
                    </div>
                </div>
                <div class="menu__burger-info">
                    <span class="menu__burger-link"> Торги </span>
                    <span class="menu__burger-link"> Рефералка </span>
                    <span class="menu__burger-link"> О нас</span>
                </div>
                <div class="menu__burger-down">Продукты</div>

                <div class="menu__burger-content">
                    <div class="menu__text-burger">
                        <div class="menu__burger-icon">
                            <img src="img/kunacode.svg" class="burger__icon">

                        </div>
                        <span class="burger__link">
                            Kuna Code
                        </span>
                    </div>
                    <div class="menu__text-burger">
                        <div class="menu__burger-icon">
                            <img src="img/kunacode.svg" class="burger__icon">

                        </div>
                        <span class="burger__link">
                            Kuna Code
                        </span>
                    </div>
                    <div class="menu__text-burger">
                        <div class="menu__burger-icon">
                            <img src="img/kunacode.svg" class="burger__icon">

                        </div>
                        <span class="burger__link">
                            Kuna Code
                        </span>
                    </div>
                    <div class="menu__text-burger">
                        <div class="menu__burger-icon">
                            <img src="img/kunacode.svg" class="burger__icon">

                        </div>
                        <span class="burger__link">
                            Kuna Code
                        </span>
                    </div>
                    <div class="menu__text-burger">
                        <div class="menu__burger-icon">
                            <img src="img/kunacode.svg" class="burger__icon">

                        </div>
                        <span class="burger__link">
                            Kuna Code
                        </span>
                    </div>
                    <div class="menu__text-burger">
                        <div class="menu__burger-icon">
                            <img src="img/kunacode.svg" class="burger__icon">

                        </div>
                        <span class="burger__link">
                            Kuna Code
                        </span>
                    </div>     <div class="menu__text-burger">
                        <div class="menu__burger-icon">
                            <img src="img/kunacode.svg" class="burger__icon">

                        </div>
                        <span class="burger__link">
                            Kuna Code
                        </span>
                    </div>
                    <div class="menu__text-burger">
                        <div class="menu__burger-icon">
                            <img src="img/kunacode.svg" class="burger__icon">

                        </div>
                        <span class="burger__link">
                            Kuna Code
                        </span>
                    </div>

                </div>

              </div>
            </div>
          </div>
      </div>
   
    <div class="content__back">
      <div class="content">
        <div class="content__body">
          <div class="content__left">
            <h1>Лучший способ покупки и<br> продажи криптовалюты</h1>
            <p>
              Зарегистрируйтесь сейчас, чтобы купить криптовалюту и торговать на
              самых популярных валютных парах
            </p>
            <div class="content__left-down">
              <button class="b1">
                <a>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="42"
                    height="30"
                    viewBox="0 0 42 30"
                    fill="none"
                  >
                    <rect
                      x="10.3389"
                      y="6.52173"
                      width="21.9692"
                      height="15.6522"
                      fill="white"
                    />
                    <path
                      d="M33.2771 0H8.72286C3.90535 0 0 3.94211 0 8.80496V21.195C0 26.0579 3.90535 30 8.72286 30H33.2771C38.0946 30 42 26.0579 42 21.195V8.80496C42 3.94211 38.0946 0 33.2771 0ZM27.3779 15.6028L15.8931 21.1319C15.5871 21.2793 15.2336 21.0541 15.2336 20.7119V9.308C15.2336 8.96093 15.5964 8.73599 15.903 8.89288L27.3879 14.7676C27.7293 14.9422 27.7234 15.4366 27.3779 15.6028Z"
                      fill="#F61C0D"
                    />
                  </svg>
                </a>
                Youtube
              </button>
            <button class="apple"><img src="img/apple.png"></button>  <button class="google1" ><img src="img/ggg.png"></button>       
            </div>
          </div>
          <div class="content__right">
            <div class="content__right-body">
              <div class="right__title">
                <a class="right__create activ"> Создать аккаунт </a>
                <a class="right__enter">Войти </a>
              </div>
              <div class="channge">
                <form action="POST">
                  <input
                    class="email"
                    type="text"
                    placeholder="Email"
                    name="email"
                  />
                  <input
                    type="password"
                    placeholder="Придумайте пароль"
                    name="password"
                    class="password"
                  />
                  <span class="change__password"><img class="img__hide" src="img/glass.svg"></span>
                  <button type="submit" name="submit" class="enter">
                    Продолжить
                  </button>
                  <div class="or">или</div>

                  <button class="enter__google" href="#" name="google">
                   <img src="img/google.svg"> Продолжить с Google
                  </button>
                  <button class="enter__google" href="#" name="google">
                    <img src="img/apple.png" width="20px" height="20px"> Продолжить с Apple
                   </button>
                </form>
                <div>
                  <p>
                    Нажимая Продолжить вы соглашаетесь с условиями
                    <a class="blue"
                      >пользовательского соглашения Kuna Exchange</a
                    >
                    и подтверждаете, что Вам есть 18 лет
                  </p>
                  <div class="agree__rules">
                    <div class="rules__left">
                      Я даю согласие на получение классных новостных рассылок
                    </div>
                    <div class="rules__right">
                      <span class="slider"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="money__way">
      <div class="money__body">
        <div class="money__body-title">
          <li class="star">
            <svg
              width="13"
              height="12"
              viewBox="0 0 13 12"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M12.3881 4.09119L9.08345 3.7623C8.87513 3.74237 8.69512 3.60284 8.60999 3.39355L7.42636 0.373739C7.23698 -0.12458 6.56458 -0.12458 6.3752 0.373739L5.20104 3.39355C5.12529 3.60284 4.93591 3.74237 4.72759 3.7623L1.42289 4.09119C0.930496 4.14103 0.731645 4.78884 1.10094 5.13766L3.5913 7.43989C3.75227 7.58939 3.81856 7.80865 3.77121 8.02791L3.02316 11.2569C2.90953 11.7653 3.43033 12.1838 3.8659 11.9148L6.6214 10.2104C6.80131 10.1008 7.0191 10.1008 7.19901 10.2104L9.9546 11.9148C10.3902 12.1838 10.911 11.7753 10.7973 11.2569L10.0587 8.02791C10.0113 7.80865 10.0776 7.58939 10.2386 7.43989L12.7289 5.13766C13.0888 4.78884 12.8804 4.14103 12.3881 4.09119Z"
                fill="#676793"
              ></path>
            </svg>
          </li>
          <li class="actived" data-open-block="uah">UAH</li>
          <li data-open-block="rub">RUB</li>
          <li data-open-block="uah">BTC</li>
          <li data-open-block="uah">USDC</li>
          <li data-open-block="usd">USD</li>
        </div>
        <div class="body__menu">
          <li>Paris</li>
          <span class="menu__text"
            >Last price<span class="menu__change"
              ><img src="img/change.svg" /> </span
          ></span>
          <span class="menu__text0">
            24h Change
            <span class="menu__change"><img src="img/change.svg" /> </span
          ></span>

          <span class="menu__text">
            24 h Hight
            <span class="menu__change"><img src="img/change.svg" /> </span
          ></span>

          <span class="menu__text-1">
            24 h Low
            <span class="menu__change"><img src="img/change.svg" /> </span
          ></span>
          <span class="menu__text2">
            24 h Volume
            <span class="menu__change"><img src="img/change.svg" /> </span
          ></span>
        </div>
        <!-- UAH -->
        <div class="money__content active" data-content="uah">
        <div class="main__body">
        <div class="main__body-icon">
              <svg
                width="13"
                height="12"
                viewBox="0 0 13 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.3881 4.09119L9.08345 3.7623C8.87513 3.74237 8.69512 3.60284 8.60999 3.39355L7.42636 0.373739C7.23698 -0.12458 6.56458 -0.12458 6.3752 0.373739L5.20104 3.39355C5.12529 3.60284 4.93591 3.74237 4.72759 3.7623L1.42289 4.09119C0.930496 4.14103 0.731645 4.78884 1.10094 5.13766L3.5913 7.43989C3.75227 7.58939 3.81856 7.80865 3.77121 8.02791L3.02316 11.2569C2.90953 11.7653 3.43033 12.1838 3.8659 11.9148L6.6214 10.2104C6.80131 10.1008 7.0191 10.1008 7.19901 10.2104L9.9546 11.9148C10.3902 12.1838 10.911 11.7753 10.7973 11.2569L10.0587 8.02791C10.0113 7.80865 10.0776 7.58939 10.2386 7.43989L12.7289 5.13766C13.0888 4.78884 12.8804 4.14103 12.3881 4.09119Z"
                  fill="#676793"
                ></path>
              </svg>
              <div class="body__value">
                <img src="img/btc.svg" />
                <div class="body__text">
                  <a class="text__bold">BTC/</a><a class="ui" href="#">UAH</a>
                </div>
              </div>
            </div>
            <div class="body__price">
              <div class="price__text-bold active" data-content="uah" id="price_buah"><?php echo($priceBTCUAH)?></div>
              <div class="price__text" data-content="rub" id="rub_uah"></div>
              <div class="price__text"  data-content="btc" id="btc"></div>
              <div class="price__text"  data-content="usdc" id="usds"></div>


              <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__change">
              <div class="change__text" id="change"><?php echo($changeBUAH) ?>%</div>
            </div>
            <div class="body__hight">
                <div class="price__text-bold active" data-content="uah" id="hight"><?php  echo($price_hightBTCUAH)  ?></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
  
  
                <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__low">
                <div class="price__text-bold active" data-content="uah" id="low"></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
  
  
                <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__volume">
                <div class="price__text-bold active" data-content="uah" id="volume"></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
                <div class="price__text"  data-content="usdc" id="usd"></div>
            </div>
          </div>


          <div class="main__body">
            <div class="main__body-icon">
              <svg
                width="13"
                height="12"
                viewBox="0 0 13 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.3881 4.09119L9.08345 3.7623C8.87513 3.74237 8.69512 3.60284 8.60999 3.39355L7.42636 0.373739C7.23698 -0.12458 6.56458 -0.12458 6.3752 0.373739L5.20104 3.39355C5.12529 3.60284 4.93591 3.74237 4.72759 3.7623L1.42289 4.09119C0.930496 4.14103 0.731645 4.78884 1.10094 5.13766L3.5913 7.43989C3.75227 7.58939 3.81856 7.80865 3.77121 8.02791L3.02316 11.2569C2.90953 11.7653 3.43033 12.1838 3.8659 11.9148L6.6214 10.2104C6.80131 10.1008 7.0191 10.1008 7.19901 10.2104L9.9546 11.9148C10.3902 12.1838 10.911 11.7753 10.7973 11.2569L10.0587 8.02791C10.0113 7.80865 10.0776 7.58939 10.2386 7.43989L12.7289 5.13766C13.0888 4.78884 12.8804 4.14103 12.3881 4.09119Z"
                  fill="#676793"
                ></path>
              </svg>
              <div class="body__value">
                <img src="img/eth.svg" />
                <div class="body__text">
                  <a class="text__bold">ETH/</a><a class="ui" href="#">UAH</a>
                </div>
              </div>
            </div>
            <div class="body__price">
              <div class="price__text-bold active" data-content="uah" id="price"><?php echo($priceETHUAH) ?></div>
              <div class="price__text" data-content="rub" id="rub"></div>
              <div class="price__text"  data-content="btc" id="btc"></div>
              <div class="price__text"  data-content="usdc" id="usds"></div>


              <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__change">
              <div class="change__text" id="change"><?php echo($changeETHUAH) ?>%</div>
            </div>
            <div class="body__hight">
                <div class="price__text-bold active" data-content="uah" id="hight"><?php echo($price_hightETHUAH) ?></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
  
  
                <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__low">
                <div class="price__text-bold active" data-content="uah" id="low"></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
  
  
                <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__volume">
                <div class="price__text-bold active" data-content="uah" id="volume"></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
                <div class="price__text"  data-content="usdc" id="usd"></div>
            </div>
          </div>

          <div class="main__body">
            <div class="main__body-icon">
              <svg
                width="13"
                height="12"
                viewBox="0 0 13 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.3881 4.09119L9.08345 3.7623C8.87513 3.74237 8.69512 3.60284 8.60999 3.39355L7.42636 0.373739C7.23698 -0.12458 6.56458 -0.12458 6.3752 0.373739L5.20104 3.39355C5.12529 3.60284 4.93591 3.74237 4.72759 3.7623L1.42289 4.09119C0.930496 4.14103 0.731645 4.78884 1.10094 5.13766L3.5913 7.43989C3.75227 7.58939 3.81856 7.80865 3.77121 8.02791L3.02316 11.2569C2.90953 11.7653 3.43033 12.1838 3.8659 11.9148L6.6214 10.2104C6.80131 10.1008 7.0191 10.1008 7.19901 10.2104L9.9546 11.9148C10.3902 12.1838 10.911 11.7753 10.7973 11.2569L10.0587 8.02791C10.0113 7.80865 10.0776 7.58939 10.2386 7.43989L12.7289 5.13766C13.0888 4.78884 12.8804 4.14103 12.3881 4.09119Z"
                  fill="#676793"
                ></path>
              </svg>
              <div class="body__value">
                <img src="img/usdt.svg" />
                <div class="body__text">
                  <a class="text__bold">USDT/</a><a class="ui" href="#">UAH</a>
                </div>
              </div>
            </div>
            <div class="body__price">
              <div class="price__text-bold active" data-content="uah" id="price"><?php echo($priceUSDTUAH) ?></div>
              <div class="price__text" data-content="rub" id="rub"></div>
              <div class="price__text"  data-content="btc" id="btc"></div>
              <div class="price__text"  data-content="usdc" id="usds"></div>


              <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__change">
              <div class="change__text" id="change"><?php echo($changeUSDTUAH) ?>%</div>
            </div>
            <div class="body__hight">
                <div class="price__text-bold active" data-content="uah" id="hight"><?php echo($price_hightUSDTUAH) ?></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
  
  
                <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__low">
                <div class="price__text-bold active" data-content="uah" id="low"></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
  
  
                <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__volume">
                <div class="price__text-bold active" data-content="uah" id="volume"></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
                <div class="price__text"  data-content="usdc" id="usd"></div>
            </div>
          </div>

        </div>
<!-- RUB -->
        <div class="money__content" data-content="rub">
        <div class="main__body">
        <div class="main__body-icon">
              <svg
                width="13"
                height="12"
                viewBox="0 0 13 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.3881 4.09119L9.08345 3.7623C8.87513 3.74237 8.69512 3.60284 8.60999 3.39355L7.42636 0.373739C7.23698 -0.12458 6.56458 -0.12458 6.3752 0.373739L5.20104 3.39355C5.12529 3.60284 4.93591 3.74237 4.72759 3.7623L1.42289 4.09119C0.930496 4.14103 0.731645 4.78884 1.10094 5.13766L3.5913 7.43989C3.75227 7.58939 3.81856 7.80865 3.77121 8.02791L3.02316 11.2569C2.90953 11.7653 3.43033 12.1838 3.8659 11.9148L6.6214 10.2104C6.80131 10.1008 7.0191 10.1008 7.19901 10.2104L9.9546 11.9148C10.3902 12.1838 10.911 11.7753 10.7973 11.2569L10.0587 8.02791C10.0113 7.80865 10.0776 7.58939 10.2386 7.43989L12.7289 5.13766C13.0888 4.78884 12.8804 4.14103 12.3881 4.09119Z"
                  fill="#676793"
                ></path>
              </svg>
              <div class="body__value">
                <img src="img/btc.svg" />
                <div class="body__text">
                  <a class="text__bold">BTC/</a><a class="ui" href="#">RUB</a>
                </div>
              </div>
            </div>
            <div class="body__price">
              <div class="price__text-bold active" data-content="uah" id="price"><?php echo($priceBTCR) ?></div>
              <div class="price__text" data-content="rub" id="rub"></div>
              <div class="price__text"  data-content="btc" id="btc"></div>
              <div class="price__text"  data-content="usdc" id="usds"></div>


              <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__change">
              <div class="change__text" id="change"><?php echo($changeBR) ?>%</div>
            </div>
            <div class="body__hight">
                <div class="price__text-bold active" data-content="uah" id="hight"><?php echo($price_hightBTCR) ?></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
  
  
                <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__low">
                <div class="price__text-bold active" data-content="uah" id="low"></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
  
  
                <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__volume">
                <div class="price__text-bold active" data-content="uah" id="volume"></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
                <div class="price__text"  data-content="usdc" id="usd"></div>
            </div>
          </div>


          <div class="main__body">
            <div class="main__body-icon">
              <svg
                width="13"
                height="12"
                viewBox="0 0 13 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.3881 4.09119L9.08345 3.7623C8.87513 3.74237 8.69512 3.60284 8.60999 3.39355L7.42636 0.373739C7.23698 -0.12458 6.56458 -0.12458 6.3752 0.373739L5.20104 3.39355C5.12529 3.60284 4.93591 3.74237 4.72759 3.7623L1.42289 4.09119C0.930496 4.14103 0.731645 4.78884 1.10094 5.13766L3.5913 7.43989C3.75227 7.58939 3.81856 7.80865 3.77121 8.02791L3.02316 11.2569C2.90953 11.7653 3.43033 12.1838 3.8659 11.9148L6.6214 10.2104C6.80131 10.1008 7.0191 10.1008 7.19901 10.2104L9.9546 11.9148C10.3902 12.1838 10.911 11.7753 10.7973 11.2569L10.0587 8.02791C10.0113 7.80865 10.0776 7.58939 10.2386 7.43989L12.7289 5.13766C13.0888 4.78884 12.8804 4.14103 12.3881 4.09119Z"
                  fill="#676793"
                ></path>
              </svg>
              <div class="body__value">
                <img src="img/eth.svg" />
                <div class="body__text">
                  <a class="text__bold">ETH/</a><a class="ui" href="#">RUB</a>
                </div>
              </div>
            </div>
            <div class="body__price">
              <div class="price__text-bold active" data-content="uah" id="price"><?php echo($priceETHR) ?></div>
              <div class="price__text" data-content="rub" id="rub"></div>
              <div class="price__text"  data-content="btc" id="btc"></div>
              <div class="price__text"  data-content="usdc" id="usds"></div>


              <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__change">
              <div class="change__text" id="change"><?php echo($changeETHR) ?>%</div>
            </div>
            <div class="body__hight">
                <div class="price__text-bold active" data-content="uah" id="hight"><?php echo($price_hightETHR) ?></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
  
  
                <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__low">
                <div class="price__text-bold active" data-content="uah" id="low"></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
  
  
                <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__volume">
                <div class="price__text-bold active" data-content="uah" id="volume"></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
                <div class="price__text"  data-content="usdc" id="usd"></div>
            </div>
          </div>

          <div class="main__body">
            <div class="main__body-icon">
              <svg
                width="13"
                height="12"
                viewBox="0 0 13 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.3881 4.09119L9.08345 3.7623C8.87513 3.74237 8.69512 3.60284 8.60999 3.39355L7.42636 0.373739C7.23698 -0.12458 6.56458 -0.12458 6.3752 0.373739L5.20104 3.39355C5.12529 3.60284 4.93591 3.74237 4.72759 3.7623L1.42289 4.09119C0.930496 4.14103 0.731645 4.78884 1.10094 5.13766L3.5913 7.43989C3.75227 7.58939 3.81856 7.80865 3.77121 8.02791L3.02316 11.2569C2.90953 11.7653 3.43033 12.1838 3.8659 11.9148L6.6214 10.2104C6.80131 10.1008 7.0191 10.1008 7.19901 10.2104L9.9546 11.9148C10.3902 12.1838 10.911 11.7753 10.7973 11.2569L10.0587 8.02791C10.0113 7.80865 10.0776 7.58939 10.2386 7.43989L12.7289 5.13766C13.0888 4.78884 12.8804 4.14103 12.3881 4.09119Z"
                  fill="#676793"
                ></path>
              </svg>
              <div class="body__value">
                <img src="img/usdt.svg" />
                <div class="body__text">
                  <a class="text__bold">USDT/</a><a class="ui" href="#">RUB</a>
                </div>
              </div>
            </div>
            <div class="body__price">
              <div class="price__text-bold active" data-content="uah" id="price"><?php echo($price_hightUSDTRu) ?></div>
              <div class="price__text" data-content="rub" id="rub"></div>
              <div class="price__text"  data-content="btc" id="btc"></div>
              <div class="price__text"  data-content="usdc" id="usds"></div>


              <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__change">
              <div class="change__text" id="change"><?php echo($changeESDTR) ?>%</div>
            </div>
            <div class="body__hight">
                <div class="price__text-bold active" data-content="uah" id="hight"><?php echo($price_hightUSDTRu) ?></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
  
  
                <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__low">
                <div class="price__text-bold active" data-content="uah" id="low"></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
  
  
                <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__volume">
                <div class="price__text-bold active" data-content="uah" id="volume"></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
                <div class="price__text"  data-content="usdc" id="usd"></div>
            </div>
          </div>

        </div>
<!-- USD -->
        <div class="money__content" data-content="usd">
        <div class="main__body">
        <div class="main__body-icon">
              <svg
                width="13"
                height="12"
                viewBox="0 0 13 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.3881 4.09119L9.08345 3.7623C8.87513 3.74237 8.69512 3.60284 8.60999 3.39355L7.42636 0.373739C7.23698 -0.12458 6.56458 -0.12458 6.3752 0.373739L5.20104 3.39355C5.12529 3.60284 4.93591 3.74237 4.72759 3.7623L1.42289 4.09119C0.930496 4.14103 0.731645 4.78884 1.10094 5.13766L3.5913 7.43989C3.75227 7.58939 3.81856 7.80865 3.77121 8.02791L3.02316 11.2569C2.90953 11.7653 3.43033 12.1838 3.8659 11.9148L6.6214 10.2104C6.80131 10.1008 7.0191 10.1008 7.19901 10.2104L9.9546 11.9148C10.3902 12.1838 10.911 11.7753 10.7973 11.2569L10.0587 8.02791C10.0113 7.80865 10.0776 7.58939 10.2386 7.43989L12.7289 5.13766C13.0888 4.78884 12.8804 4.14103 12.3881 4.09119Z"
                  fill="#676793"
                ></path>
              </svg>
              <div class="body__value">
                <img src="img/btc.svg" />
                <div class="body__text">
                  <a class="text__bold">BTC/</a><a class="ui" href="#">USD</a>
                </div>
              </div>
            </div>
            <div class="body__price">
              <div class="price__text-bold active" data-content="uah" id="price_usd"><?php echo($price) ?></div>
              <div class="price__text" data-content="rub" id="rub"></div>
              <div class="price__text"  data-content="btc" id="btc"></div>
              <div class="price__text"  data-content="usdc" id="usds"></div>


              <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__change">
              <div class="change__text" id="change"><?php echo($changeBUSD) ?>%</div>
            </div>
            <div class="body__hight">
                <div class="price__text-bold active" data-content="uah" id="hight"><?php echo($price_hight) ?></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
  
  
                <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__low">
                <div class="price__text-bold active" data-content="uah" id="low"></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
  
  
                <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__volume">
                <div class="price__text-bold active" data-content="uah" id="volume"></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
                <div class="price__text"  data-content="usdc" id="usd"></div>
            </div>
          </div>


          <div class="main__body">
            <div class="main__body-icon">
              <svg
                width="13"
                height="12"
                viewBox="0 0 13 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.3881 4.09119L9.08345 3.7623C8.87513 3.74237 8.69512 3.60284 8.60999 3.39355L7.42636 0.373739C7.23698 -0.12458 6.56458 -0.12458 6.3752 0.373739L5.20104 3.39355C5.12529 3.60284 4.93591 3.74237 4.72759 3.7623L1.42289 4.09119C0.930496 4.14103 0.731645 4.78884 1.10094 5.13766L3.5913 7.43989C3.75227 7.58939 3.81856 7.80865 3.77121 8.02791L3.02316 11.2569C2.90953 11.7653 3.43033 12.1838 3.8659 11.9148L6.6214 10.2104C6.80131 10.1008 7.0191 10.1008 7.19901 10.2104L9.9546 11.9148C10.3902 12.1838 10.911 11.7753 10.7973 11.2569L10.0587 8.02791C10.0113 7.80865 10.0776 7.58939 10.2386 7.43989L12.7289 5.13766C13.0888 4.78884 12.8804 4.14103 12.3881 4.09119Z"
                  fill="#676793"
                ></path>
              </svg>
              <div class="body__value">
                <img src="img/eth.svg" />
                <div class="body__text">
                  <a class="text__bold">ETH/</a><a class="ui" href="#">USD</a>
                </div>
              </div>
            </div>
            <div class="body__price">
              <div class="price__text-bold active" data-content="uah" id="price"><?php echo($priceETH) ?></div>
              <div class="price__text" data-content="rub" id="rub"></div>
              <div class="price__text"  data-content="btc" id="btc"></div>
              <div class="price__text"  data-content="usdc" id="usds"></div>


              <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__change">
              <div class="change__text" id="change"><?php echo($changeETHUSD) ?>%</div>
            </div>
            <div class="body__hight">
                <div class="price__text-bold active" data-content="uah" id="hight"><?php echo($price_hightETH) ?></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
  
  
                <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__low">
                <div class="price__text-bold active" data-content="uah" id="low"></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
  
  
                <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__volume">
                <div class="price__text-bold active" data-content="uah" id="volume"></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
                <div class="price__text"  data-content="usdc" id="usd"></div>
            </div>
          </div>

          <div class="main__body">
            <div class="main__body-icon">
              <svg
                width="13"
                height="12"
                viewBox="0 0 13 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M12.3881 4.09119L9.08345 3.7623C8.87513 3.74237 8.69512 3.60284 8.60999 3.39355L7.42636 0.373739C7.23698 -0.12458 6.56458 -0.12458 6.3752 0.373739L5.20104 3.39355C5.12529 3.60284 4.93591 3.74237 4.72759 3.7623L1.42289 4.09119C0.930496 4.14103 0.731645 4.78884 1.10094 5.13766L3.5913 7.43989C3.75227 7.58939 3.81856 7.80865 3.77121 8.02791L3.02316 11.2569C2.90953 11.7653 3.43033 12.1838 3.8659 11.9148L6.6214 10.2104C6.80131 10.1008 7.0191 10.1008 7.19901 10.2104L9.9546 11.9148C10.3902 12.1838 10.911 11.7753 10.7973 11.2569L10.0587 8.02791C10.0113 7.80865 10.0776 7.58939 10.2386 7.43989L12.7289 5.13766C13.0888 4.78884 12.8804 4.14103 12.3881 4.09119Z"
                  fill="#676793"
                ></path>
              </svg>
              <div class="body__value">
                <img src="img/usdt.svg" />
                <div class="body__text">
                  <a class="text__bold">USDT/</a><a class="ui" href="#">USD</a>
                </div>
              </div>
            </div>
            <div class="body__price">
              <div class="price__text-bold active" data-content="uah" id="price"><?php echo($priceUSDTUSD) ?></div>
              <div class="price__text" data-content="rub" id="rub"></div>
              <div class="price__text"  data-content="btc" id="btc"></div>
              <div class="price__text"  data-content="usdc" id="usds"></div>


              <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__change">
              <div class="change__text" id="change"><?php echo($changeUSDTUSD) ?>%</div>
            </div>
            <div class="body__hight">
                <div class="price__text-bold active" data-content="uah" id="hight"><?php echo($price_hightUSDTUSD) ?></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
  
  
                <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__low">
                <div class="price__text-bold active" data-content="uah" id="low"></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
  
  
                <div class="price__text"  data-content="usdc"></div>
            </div>
            <div class="body__volume">
                <div class="price__text-bold active" data-content="uah" id="volume"></div>
                <div class="price__text" data-content="rub" id="rub"></div>
                <div class="price__text"  data-content="btc" id="btc"></div>
                <div class="price__text"  data-content="usdc" id="usds"></div>
                <div class="price__text"  data-content="usdc" id="usd"></div>
            </div>
          </div>

        </div>



      </div>
    </div>
<div class="buy">
    <div class="buy__value">
        <div class="buy__value-text">
          <div class="buy__value-title">
            Купуйте криптовалюту в 2 кліка на Dashboard
          </div>
          <div class="buy__text">
            Дашборд - інструмент з допомогою якого ви зможете відслідковувати
            показники в реальному часі і моментально купувати, продавати і
            обмінювати криптовалюту. Його основна мета - зробити життя
            користувачів Kuna простіше
          </div>
  
          <li>
            <span class="li__icon">
              <img src="img/icon.svg" />
            </span>
            Швидка покупка, продаж, обмін
          </li>
          <li>
            <span class="li__icon">
              <img src="img/icon.svg" />
            </span>
            Швидка покупка, продаж, обмін
          </li>
          <li>
            <span class="li__icon">
              <img src="img/icon.svg" />
            </span>
            Швидка покупка, продаж, обмін
          </li>
  
          <div class="buy__value-down">
            <button class="enter1">Buy</button>
            <button class="youtube"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 42 30" fill="none">
                <rect x="10.3389" y="6.52173" width="21.9692" height="15.6522" fill="white"></rect>
                <path d="M33.2771 0H8.72286C3.90535 0 0 3.94211 0 8.80496V21.195C0 26.0579 3.90535 30 8.72286 30H33.2771C38.0946 30 42 26.0579 42 21.195V8.80496C42 3.94211 38.0946 0 33.2771 0ZM27.3779 15.6028L15.8931 21.1319C15.5871 21.2793 15.2336 21.0541 15.2336 20.7119V9.308C15.2336 8.96093 15.5964 8.73599 15.903 8.89288L27.3879 14.7676C27.7293 14.9422 27.7234 15.4366 27.3779 15.6028Z" fill="#F61C0D"></path>
              </svg>
                Видеопрезентация дашборда</button>
          </div>
        </div>
        <div class="buy__value-rightimg"><img src="img/iphxpng.png"></div>

  
        <div class="buy__value-right">
          <div class="circle"></div>
          <img src="img/image.png" />
        </div>
      </div>
</div>
   

    <div class="content__line">
      <div class="line__body">
        <div class="line__text">
          <div class="line__money">$14 343 139</div>
          <div class="line__money-down">Обсяг торгів за 7 днів</div>
        </div>
        <div class="line__text">
          <div class="line__money">$14 343 139</div>
          <div class="line__money-down">Обсяг торгів за 7 днів</div>
        </div>
        <div class="line__text">
          <div class="line__money">$14 343 139</div>
          <div class="line__money-down">Обсяг торгів за 7 днів</div>
        </div>
      </div>
    </div>
    <div class="cashout">
      <div class="content__cashout">
        <div class="cashout__body">
          <h3>Легке та швидке поповнення та вивід</h3>
          <div class="cashout__maincontent">
            <ul class="cachout__title">
              <div class="cashout__link act" data-actived-block="uah">UAH</div>
              <div class="cashout__link" data-actived-block="usd">USD</div>
              <div class="cashout__link" data-actived-block="rub">RUB</div>
            </ul>
            <div class="main__change yet" data-about="uah">
              <div class="change__content">
                <img src="img/visa.svg" data-actived-change="1"/>
                <div>Visa//Mastercard</div>
              </div>
         
              <div class="change__content">
                <img src="img/visa.svg"  data-actived-change="1"/>
                <div>Visa//Mastercard</div>
              </div>
              <div class="change__content" >
                <img src="img/visa.svg"  data-actived-change="1" />
                <div>Visa//Mastercard</div>
              </div>
              <div class="change__content">
                <img src="img/visa.svg"  data-actived-change="1"/>
                <div>Visa//Mastercard</div>
              </div>
         
            </div>
            <div class="main__change" data-about="usd">
                <div class="change__content">
                    <img src="img/qiwi.svg"  data-actived-change="2"/>
                    <div>QIWI</div>
                  </div>
          
                <div class="change__content">
                  <img src="img/qiwi.svg" data-actived-change="2" />
                  <div>QIWI</div>
                </div>
               
                <div class="change__content">
                  <img src="img/qiwi.svg" data-actived-change="2"/>
                  <div>QIWI</div>
                </div>
                
                <div class="change__content">
                    <img src="img/qiwi.svg" data-actived-change="2"/>
                    <div>QIWI</div>
                  </div>
              </div>

              <div class="main__change" data-about="rub">
                <div class="change__content">
                  <img src="img/visa.svg" data-actived-change="1"  />
                  <div>Visa//Mastercard</div>
                </div>
                <div class="change__content">
                  <img src="img/qiwi.svg" data-actived-change="2"/>
                  <div>QIWI</div>
                </div>
                <div class="change__content">
                    <img src="img/visa.svg" data-actived-change="1" />
                    <div>Visa//Mastercard</div>
                  </div>
  
                <div class="change__content">
                  <img src="img/qiwi.svg" data-actived-change="2"/>
                  <div>QIWI</div>
                </div>
              </div>

              <div class="text__change-content" >
                <div class="text__change-bold">Kuna Code PRO</div>

                <div class="text__change visible">
                  Kuna Code — це інструмент для переказу активів між акаунтами
                  користувачів біржі Kuna. Kuna Code також дозволяє зберегти або
                  передати будь-який актив поза біржею, включаючи обмінки.
                </div>
           



              </div>


              <div class="text__change-content" data-click="2">
                <div class="text__change-bold" >Qiwi</div>

                <div class="text__change">
                    QIWI – ведущий провайдер платежных и финансовых сервисов в странах СНГ. Компания основана в 2007 году в России. Сегодня сеть включает свыше 20,3 млн виртуальных кошельков и более чем 149 000 терминалов и точек приема платежей.<br>

                    QIWI-кошелек — виртуальный кошелек, в котором хранятся электронные денежные знаки. Из него можно оплачивать услуги через международную платежную систему. В ноябре 2012 года Visa и QIWI подписали соглашение о глобальном партнерстве, в рамках которого QIWI Кошелек преобразовался в ко-брендинговый продукт Visa QIWI Wallet.<br>
                    
                    Пользователи QIWI могут осуществлять платежи и денежные переводы, оплачивать услуги, товары и покупки в сети интернет. Возможен выпуск виртуальных и пластиковых дебетовых платежных карт системы VISA.<br>
                    
                    3 мая 2013 года QIWI plc провела первичное размещение акций на бирже NASDAQ.<br>
                </div>
               


              </div>
              <div class="text__change-content" data-click="1">
                <div class="text__change-bold">Visa/mastercard</div>

                <div class="text__change">
                    Visa/Mastercard - глобальные международные платежные системы.

                    Visa Inc. — американская компания, существует с 1958 года. Ежегодный торговый оборот карт Visa составляет 2,5 триллиона долларов США. Карты Visa принимаются к оплате в торговых точках более 150 стран мира, а продукты компании использует 21 тысяча финансовых организаций-членов платежной системы и держатели их карт.<br>
                    
                    С 20 сентября 2013 года цена акций Visa Inc. участвует в расчёте индекса Доу-Джонса.<br>
                    
                    MasterCard Worldwide или MasterCard Incorporated — международная платежная система, транснациональная финансовая корпорация, объединяющая 22 тысячи финансовых учреждений в 210 странах мира. Основана в 1966 году в США. Доля MasterCard в мире составляет около 20 % платежного рынка.<br>
                    
                    VISA от MasterCard отличается, в основном, ориентацией на операции в долларах, тогда как MasterCard — на операции в долларах и евро.<br>
                </div>
         



              </div>
              <div class="chenge__buttons">
                <button class="enter1">ВЫВЕСТи</button>
                <button class="enter1">ВЫВЕСТи</button>
              </div>
       
          </div>
        </div>
      </div>
    </div>

    <div class="cashout__about">
      <div class="about__mainbody">
        <div class="about__mainbody-left">
          <div class="about__mainbody-large">100%</div>
          <div class="white__money">WHITE MONEY</div>
        </div>
        <div class="about__mainbody-right">
          <h3>Рахунки біржі забезпечені на 100%</h3>
          <p>Кількість активів на нашій біржі – це реально існуючі кошти.</p>
          <p>
            У банків норма резервування складає менше 10% від загального обсягу
            залучених коштів. Наша біржа завжди резервує 100% коштів. Тому в
            будь-який момент користувачі можуть забрати свої активи і це ніяк не
            вплине на роботу біржі.
          </p>

          <div class="about__mainbody-down">
            <button>i</button><span>Норма резервування банків</span>
            <p>Реальное количество денег в банках. Не нарисованное на счетах пользователей значение, а физические деньги, которые хранятся в сейфах. Это число для украинских банков составляет 7%. Т.е если хотя бы 10% вкладчиков придут в банк за своими вкладами — у банка просто не будет столько физических денег, чтобы раздать их клиентам.

            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="block">
      <div class="block__body">
        <div class="block__body-left">
          <div>
            <img src="img/iphone.webp">
          </div>
        </div>
        <div class="block__body-right">
          <h3>Зручний мобільний додаток</h3>
          <p>
            Ми знаємо як важливо завжди тримати руку на пульсі крипторинку.
            Спеціально для цих задач ми випустили новий мобільний додаток із
            урахуванням ваших побажань.
          </p>
          <!-- <div class="block__bodyright-down">
            <button class="google"></button>
            <button class="apple"></button>
          </div>  -->
        </div>
      </div>
    </div>
    <div class="block__program">
      <div class="block__program-content">
        <div class="block__program-left">
          <img src="img/alt.svg" />
        </div>
        <div class="block__program-right">
          <div class="bold">
            <h3>Унікальна <br>реферальна програма
          </div>
          <div>
            Отримуйте <b>до 75%</b> комісії всіх своїх рефералів. Чим більший об'єм
            торгів — тим більший прибуток,
          </div>
          <ul>
            <li class="li change" id="1">Приклад 1</li>
            <li class="li" id="2">Приклад 2</li>
          </ul>
          <div class="li__content net"id="01">
            У вас є 10 рефералів, кожен з яких торгує на $40 000 в тиждень.
            Загальна сума торгів усіх ваших рефералів буде $400 000 в тиждень.
            Вони виплатять $1000 комісії, а ви отримаєте 50% від цієї суми.
            Тобто $500. Виходить<b>за місяць на 10 таких рефералах ви зможете
                заробити $2000</b> 
          </div>
          <div class="li__content" id="02">
            Ви маєте 345 рефералів, кожен з яких торгує на $2000 на тиждень.<br> Загальна сума торгів усіх ваших рефералів буде $690 000 на тиждень. Вони виплатять $1725 комісії, а ви отримаєте 60% від цієї суми. <br>Тобто $1035. Виходить за місяць на 345 таких рефералах ви зможете заробити $4140.
          </div>
          <button>Дознаться больше</button>
        </div>
      </div>
    </div>
    <div class="man__conetnt">
        <div class="man__border"></div>
      <div class="man__left">
        <div class="man__left-body">
           <div class="man__left-img"></div><img src="img/miki.webp">
           <div class="button">Михайло Чабонян</div>
          <div class="man__title-down">Засновник Kuna</div>
        </div>
      </div>

      <div class="man__about">
        <h2>Публічний лідер</h2>
        <div class="man__text">
            <p>
                Я постійно спілкуюся з користувачами біржі. Обговорюю останні новини
                та ділюся планами на майбутнє нашої з вами платформи. Я не ховаюся від
                влади, мої соціальні профайли відкриті для обговорення та пропозицій.
                Я вірю, що тільки спілкування   з користувачами допоможе нам зрозуміти,
                в якому  напрямку варто розвивати платформу.
              </p>
      
              <p class="p">
                Ви завжди можете поставити запитання або подивитися попередні випуски
                рубрики Ask me anything (AMA) на YouTube.
            </p>


        </div>
      <div class="man__about-down">
        <div class="man__youtube">

            <div class="youtube__icon">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                width="42"
                height="30"
                viewBox="0 0 42 30"
                fill="none"
              >
                <rect
                  x="10.3389"
                  y="6.52173"
                  width="21.9692"
                  height="15.6522"
                  fill="white"
                ></rect>
                <path
                  d="M33.2771 0H8.72286C3.90535 0 0 3.94211 0 8.80496V21.195C0 26.0579 3.90535 30 8.72286 30H33.2771C38.0946 30 42 26.0579 42 21.195V8.80496C42 3.94211 38.0946 0 33.2771 0ZM27.3779 15.6028L15.8931 21.1319C15.5871 21.2793 15.2336 21.0541 15.2336 20.7119V9.308C15.2336 8.96093 15.5964 8.73599 15.903 8.89288L27.3879 14.7676C27.7293 14.9422 27.7234 15.4366 27.3779 15.6028Z"
                  fill="#F61C0D"
                ></path>
              </svg>

            </div>
            <span>YouTube</span>
          </div>

      </div>
  
      </div>
    </div>

    <div class="telega">
      <div class="telega__body">
        <div class="image1">
          <img src="img/telega.svg" />
        </div>
        <div class="telega__content">
            <div class="kuna__text">
                <h2>Сапорт, якому не все одно</h2>
                <p>
                  Наша служба підтримки працює цілодобово. Ми вирішуємо питання
                  клієнтів швидко та чітко. Якщо у нас якісь проблеми - ми
                  повідомляємо про це на нашому сайті та в каналі телеграм. Ми
                  ставимося до кожного користувача з любов'ю та турботою ❤️
                </p>
                <button>Telega</button>
            </div>
            <div class="kuna">
          <img src="img/kuna.webp" />
            </div>

          
        </div>
      </div>
    </div>

    <div class="last__content">
      <div class="last__content-body">
        <h1>Залишилися запитання?</h1>
        <p> 
          Відповідаємо протягом 30 секунд! Ми спілкуємося в зручних для вас
          месенджерах.<br> Ніяких автовідповідачів і роботів. Спілкування лише з
          живими людьми. 😊 😊
        </p>

        <div class="telegram">
          <img src="img/telegram.svg" />
          <div class="telega__link">TELEGA</div>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="footer__body">
        <div class="footer__title">
            <div class="footer__title-about">
                <div class="footer__icon">
                    <img src="img/kun.svg" />
                  </div>
                  <td class="all__footer">
                    <div class="footer__text-bold"><b class="b"> $2 022 634</b>  
                    <div class="footer__text">Обсяг торгів</div>
        
                    </div>
                  </td>
        
                  <td class="all__footer">
                    <div class="footer__text-bold"><b class="b">43 555</b>  
                    <div class="footer__text">Активних трейдерів</div>
        
                    </div>
                  </td>

            </div>
          
<div class="footer__title-down">
    <div class="language">
        <button>
          UK
          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
            <g clip-path="url(#clip0)">
              <path d="M7.8515 3.89842C7.75261 3.79945 7.63538 3.75 7.49994 3.75L0.500038 3.75C0.364534 3.75 0.247392 3.79945 0.148419 3.89842C0.0494455 3.9975 0 4.11464 0 4.25006C0 4.38546 0.0494455 4.5026 0.148419 4.6016L3.64838 8.10156C3.74746 8.20054 3.86461 8.25009 4 8.25009C4.13539 8.25009 4.25265 8.20054 4.35154 8.10156L7.8515 4.60157C7.95036 4.5026 8 4.38546 8 4.25004C8 4.11464 7.95036 3.9975 7.8515 3.89842Z" fill="#C6C9CF"></path>
            </g>
            <defs>
              <clipPath id="clip0">
                <rect width="8" height="8" fill="white"></rect>
              </clipPath>
            </defs>
          </svg>
        </button>
      </div>
      <div class="apps">
          <img class="iphone xyita">
        <div class="apple__ap">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            version="1.1"
            id="Capa_1"
            x="0px"
            y="0px"
            viewBox="0 0 291.632 291.632"
            style="
              enable-background: new 0 0 291.632 291.632;
              width: 24px;
              height: 17px;
            "
            xml:space="preserve"
          >
            <path
              style="fill: #222220"
              d="M271.636,207.578c-0.792-1.913-2.341-3.413-4.278-4.145c-19.791-7.478-33.017-25.413-34.517-46.81  c-1.468-20.937,8.773-39.527,27.396-49.731c1.945-1.065,3.318-2.937,3.751-5.111c0.433-2.175-0.118-4.43-1.506-6.159  c-15.505-19.324-37.563-30.861-59.003-30.861c-10.157,0-18.085,1.762-24.929,3.95c4.422-3.369,8.465-7.292,11.891-11.689  c12.009-15.416,17.465-33.868,14.971-50.627c-0.576-3.868-4.018-6.632-7.934-6.378c-16.866,1.161-35.984,11.396-47.573,25.467  c-12.04,14.621-17.814,32.331-15.726,47.829c-1.63-0.552-3.288-1.139-5.004-1.751c-8.917-3.179-19.023-6.781-31.64-6.781  c-24.358,0-49.034,14.69-64.397,38.338c-10.983,16.907-15.602,40.81-13.005,67.304c2.7,27.55,12.711,55.175,28.953,79.89  c12.565,19.12,30.042,41.097,53.859,41.319l0.447,0.002c9.83-0.001,16.438-2.945,22.829-5.793  c6.747-3.006,13.119-5.846,24.677-5.908l0.378-0.001c11.31,0,17.473,2.824,23.998,5.814c6.27,2.873,12.753,5.844,22.567,5.844  l0.448-0.002c23.198-0.22,40.675-22.098,54.709-43.468c8.561-13.019,11.885-19.824,18.547-34.585  C272.395,211.647,272.428,209.491,271.636,207.578z M161.483,35.018c7.149-8.681,18.688-15.85,29.506-18.739  c-0.558,14.646-8.541,26.593-12.383,31.523c-7.438,9.549-18.877,16.434-29.824,18.279C148.962,58.872,151.254,47.44,161.483,35.018z   M240.46,239.881c-11.17,17.009-26.075,36.552-42.314,36.705l-0.308,0.002c-6.541,0-10.856-1.978-16.319-4.48  c-6.979-3.198-15.664-7.178-30.247-7.178l-0.461,0.001c-14.704,0.08-23.573,4.032-30.699,7.207  c-5.634,2.511-10.084,4.493-16.725,4.494l-0.308-0.002c-8.785-0.082-21.437-4.084-41.462-34.558  C32.703,198.07,25.866,141.845,45.716,111.29c12.626-19.436,32.482-31.51,51.818-31.51c10.023,0,18.077,2.871,26.604,5.911  c8.189,2.919,16.657,5.938,26.464,5.938c9.248,0,16.786-2.852,24.076-5.61c8.132-3.076,16.541-6.258,28.802-6.258  c14.552,0,29.657,6.969,41.669,18.962c-18.867,13.7-28.94,35.139-27.271,58.95c1.725,24.591,15.621,45.615,36.868,56.546  C250.231,223.96,247.056,229.851,240.46,239.881z"
            ></path>

          </svg>
        </div>

        <div class="apple__ap1">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            version="1.1"
            id="Capa_1"
            x="0px"
            y="0px"
            viewBox="0 0 291.632 291.632"
            style="
              enable-background: new 0 0 291.632 291.632;
              width: 24px;
              height: 17px;
            "
            xml:space="preserve"
          >
            <path
              style="fill: #222220"
              d="M271.636,207.578c-0.792-1.913-2.341-3.413-4.278-4.145c-19.791-7.478-33.017-25.413-34.517-46.81  c-1.468-20.937,8.773-39.527,27.396-49.731c1.945-1.065,3.318-2.937,3.751-5.111c0.433-2.175-0.118-4.43-1.506-6.159  c-15.505-19.324-37.563-30.861-59.003-30.861c-10.157,0-18.085,1.762-24.929,3.95c4.422-3.369,8.465-7.292,11.891-11.689  c12.009-15.416,17.465-33.868,14.971-50.627c-0.576-3.868-4.018-6.632-7.934-6.378c-16.866,1.161-35.984,11.396-47.573,25.467  c-12.04,14.621-17.814,32.331-15.726,47.829c-1.63-0.552-3.288-1.139-5.004-1.751c-8.917-3.179-19.023-6.781-31.64-6.781  c-24.358,0-49.034,14.69-64.397,38.338c-10.983,16.907-15.602,40.81-13.005,67.304c2.7,27.55,12.711,55.175,28.953,79.89  c12.565,19.12,30.042,41.097,53.859,41.319l0.447,0.002c9.83-0.001,16.438-2.945,22.829-5.793  c6.747-3.006,13.119-5.846,24.677-5.908l0.378-0.001c11.31,0,17.473,2.824,23.998,5.814c6.27,2.873,12.753,5.844,22.567,5.844  l0.448-0.002c23.198-0.22,40.675-22.098,54.709-43.468c8.561-13.019,11.885-19.824,18.547-34.585  C272.395,211.647,272.428,209.491,271.636,207.578z M161.483,35.018c7.149-8.681,18.688-15.85,29.506-18.739  c-0.558,14.646-8.541,26.593-12.383,31.523c-7.438,9.549-18.877,16.434-29.824,18.279C148.962,58.872,151.254,47.44,161.483,35.018z   M240.46,239.881c-11.17,17.009-26.075,36.552-42.314,36.705l-0.308,0.002c-6.541,0-10.856-1.978-16.319-4.48  c-6.979-3.198-15.664-7.178-30.247-7.178l-0.461,0.001c-14.704,0.08-23.573,4.032-30.699,7.207  c-5.634,2.511-10.084,4.493-16.725,4.494l-0.308-0.002c-8.785-0.082-21.437-4.084-41.462-34.558  C32.703,198.07,25.866,141.845,45.716,111.29c12.626-19.436,32.482-31.51,51.818-31.51c10.023,0,18.077,2.871,26.604,5.911  c8.189,2.919,16.657,5.938,26.464,5.938c9.248,0,16.786-2.852,24.076-5.61c8.132-3.076,16.541-6.258,28.802-6.258  c14.552,0,29.657,6.969,41.669,18.962c-18.867,13.7-28.94,35.139-27.271,58.95c1.725,24.591,15.621,45.615,36.868,56.546  C250.231,223.96,247.056,229.851,240.46,239.881z"
            ></path>
          </svg>
        </div>
      </div>
    </div>

</div>

        <div class="footer__info">
          <div class="footer__block">
            <h3>ИНФОРМАЦИЯ</h3>
            <li>
              <a> ПРо нас </a>
            </li>
            <li>
              <a> ПРо нас </a>
            </li>
            <li>
              <a> ПРо нас </a>
            </li>
            <li>
              <a> ПРо нас </a>
            </li>
          </div>
          <div class="footer__block">
            <h3>ИНФОРМАЦИЯ</h3>
            <li>
              <a> ПРо нас </a>
            </li>
            <li>
              <a> ПРо нас </a>
            </li>
            <li>
              <a> ПРо нас </a>
            </li>
            <li>
              <a> ПРо нас </a>
            </li>
          </div>
          <div class="footer__block">
            <h3>ИНФОРМАЦИЯ</h3>
            <li>
              <a> ПРо нас </a>
            </li>
            <li>
              <a> ПРо нас </a>
            </li>
            <li>
              <a> ПРо нас </a>
            </li>
            <li>
              <a> ПРо нас </a>
            </li>
          </div>
          <div class="footer__block">
            <h3>ИНФОРМАЦИЯ</h3>
            <li>
              <a> ПРо нас </a>
            </li>
            <li>
              <a> ПРо нас </a>
            </li>
            <li>
              <a> ПРо нас </a>
            </li>
            <li>
              <a> ПРо нас </a>
            </li>
          </div>
          <div class="footer__block">
            <h3>ИНФОРМАЦИЯ</h3>
            <li>
              <a> ПРо нас </a>
            </li>
            <li>
              <a> ПРо нас </a>
            </li>
            <li>
              <a> ПРо нас </a>
            </li>
            <li>
              <a> ПРо нас </a>
            </li>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="kuna.js"></script>
  </body>
</html>
