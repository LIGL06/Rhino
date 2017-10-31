<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rhino Bus</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
            html, body {
              margin: 0;
              padding: 0;
            }
            
            body {
              background: #f57d7d;
              font-family: 'Poiret One', cursive;
            }
            
            .title {
              text-align: center;
              color: #fff;
              text-transform: uppercase;
              font-size: 30px;
              padding-top: 40px;
              max-width: 210px;
              margin: 0 auto;
            }
            .title > span {
              display: inline-block;
              font-weight: bold;
              text-shadow: 11px 0px 8px rgba(246, 246, 246, 0.7);
            }
            .title > span:first-child {
              transform: rotate(-10deg);
            }
            .title > span:last-child {
              transform: rotate(5deg);
              margin-top: 5px;
            }
            
            .bus-container {
              padding: 100px 0 0;
              max-width: 440px;
              margin: 0 auto;
              text-align: center;
              position: relative;
            }
            
            @keyframes shake {
              from, to {
                transform: translate3d(0, 0, 0);
              }
              10%, 30%, 50%, 70%, 90% {
                transform: translate3d(-3px, 0, 0);
              }
              20%, 40%, 60%, 80% {
                transform: translate3d(10px, 0, 0);
              }
            }
            .bus-wrap {
              width: 340px;
              height: 310px;
              background: #6fe6ff;
              display: inline-block;
              border-radius: 20px;
              position: relative;
              transform: rotate(-2deg);
              z-index: 1;
            }
            .bus-wrap.main {
              animation: shake 15s infinite;
            }
            .bus-wrap:before {
              content: '';
              position: absolute;
              width: 340px;
              height: 145px;
              display: block;
              background: #6fe6ff;
              border-radius: 50%;
              left: 0;
              top: -50px;
            }
            
            .side-mirror-wrap {
              position: absolute;
              width: 100%;
              top: 100px;
              z-index: 5;
            }
            
            .side-mirror {
              width: 27px;
              height: 43px;
              position: absolute;
              background: #495456;
              top: -100px;
              border-radius: 5px;
              display: inline-block;
            }
            .side-mirror:before {
              content: '';
              position: absolute;
              width: 12px;
              height: 12px;
              background: #495456;
              display: block;
              top: -8px;
              display: inline-block;
              left: 0;
              right: 0;
              margin: auto;
              border-radius: 3px;
            }
            .side-mirror.left {
              left: -28px;
            }
            .side-mirror.right {
              right: -28px;
              transform: rotateY(-180deg);
            }
            .side-mirror.right:after {
              content: '';
              width: 23px;
              height: 50px;
              position: absolute;
              background: rgba(136, 136, 136, 0.16);
              border-radius: 30px 30px 10px 10px;
              left: 30px;
            }
            
            .rode-1 {
              width: 30px;
              height: 30px;
              border: 4px solid #495456;
              position: absolute;
              top: -29px;
              border-right-color: transparent;
              border-bottom-color: transparent;
              border-radius: 0;
              /* border-width: inherit; */
              border-radius: 10px 0 0 0;
              transform: rotate(27deg);
              left: 14px;
            }
            
            .rode-2 {
              width: 20px;
              height: 18px;
              border: 4px solid #495456;
              position: absolute;
              top: -18px;
              border-right-color: transparent;
              border-bottom-color: transparent;
              border-radius: 0;
              border-radius: 10px 0 0 0;
              transform: rotate(29deg);
              left: 15px;
            }
            
            .mirror {
              width: 310px;
              height: 127px;
              border: 6px solid #62c9de;
              display: inline-block;
              position: relative;
              border-top-right-radius: 50%;
              border-top-left-radius: 50%;
              margin-top: -42px;
              background: #d6f7ff;
              overflow: hidden;
              box-shadow: inset 0 25px 20px 3px #f6f8f9;
            }
            .mirror:after {
              width: 200px;
              height: 400px;
              content: '';
              background: rgba(95, 95, 95, 0.07);
              position: absolute;
              display: inline-block;
              z-index: 10;
              transform: rotate(70deg);
              left: 93px;
              top: -40px;
            }
            
            .people {
              height: 50px;
              width: 100px;
              border-radius: 90px 90px 0 0;
              -moz-border-radius: 90px 90px 0 0;
              -webkit-border-radius: 90px 90px 0 0;
              background: #c9e8f0;
              display: inline-block;
              position: absolute;
              top: 69%;
            }
            .people:before {
              content: '';
              width: 30px;
              height: 40px;
              background: #c9e8f0;
              display: inline-block;
              border-radius: 50%;
              top: -30px;
              position: relative;
            }
            .people:nth-child(1) {
              background: #bcd9e0;
              left: 0;
            }
            .people:nth-child(1):before {
              background: #bcd9e0;
            }
            .people:nth-child(2) {
              left: 25px;
              z-index: 2;
            }
            .people:nth-child(3) {
              left: 65px;
              top: 63%;
              background: #b4cfd6;
            }
            .people:nth-child(3):before {
              background: #b4cfd6;
            }
            .people:nth-child(4) {
              left: 115px;
              background: #bcd9e0;
              z-index: 1;
            }
            .people:nth-child(4):before {
              background: #bcd9e0;
            }
            .people:nth-child(5) {
              right: 60px;
              top: 60%;
              background: #c2e2ea;
            }
            .people:nth-child(5):before {
              background: #c2e2ea;
            }
            .people:nth-child(6) {
              right: 40px;
              background: #c9e9f1;
              z-index: 3;
            }
            .people:nth-child(6):before {
              background: #c9e9f1;
            }
            .people:nth-child(7) {
              right: 10px;
              background: #b6d2d8;
            }
            .people:nth-child(7):before {
              background: #b6d2d8;
            }
            .people:nth-child(8) {
              right: -10px;
              background: #bedbe3;
              z-index: 4;
            }
            .people:nth-child(8):before {
              background: #bedbe3;
            }
            
            .steering {
              width: 70px;
              height: 23px;
              border: 5px solid #b6d2d8;
              position: absolute;
              top: 77%;
              z-index: 4;
              border-radius: 50%;
              overflow: hidden;
              left: 33px;
              transform: rotate(-8deg);
            }
            .steering:before, .steering:after {
              content: '';
              position: absolute;
              border: 4px solid #b6d2d8;
              border-radius: 4px;
            }
            .steering:before {
              width: 50px;
              height: 50px;
              top: 12px;
              transform: rotate(0deg);
              left: 31px;
            }
            .steering:after {
              width: 49px;
              height: 29px;
              top: 3px;
              left: -24px;
              transform: rotate(19deg);
            }
            
            hr {
              height: 10px;
              background: #69d9f0;
              border: none;
              margin: 3px 0 0;
            }
            
            .side-light {
              width: 25px;
              height: 15px;
              background: linear-gradient(to bottom right, #f46b0e 58%, #dd5900 59%);
              border: 0.06em solid #dd5900;
              border-top-color: #ec8c47;
              border-bottom-color: #bb4b00;
              border-radius: 0.06em;
              display: inline-block;
              margin-top: 5px;
              border-radius: 4px;
            }
            .side-light__on {
              animation-name: directional-blinking;
              animation-duration: 1s;
              animation-iteration-count: infinite;
              background: #ffbc00;
              background: radial-gradient(#ffe7a5, #ffbc00 65%, #ff9c00);
              border-radius: 0.06em;
              box-shadow: 0 0 1em #ffbc00;
              height: 100%;
              position: relative;
              width: 100%;
              left: -2px;
              right: -2px;
            }
            .side-light.left {
              float: left;
              box-shadow: 2px 2px 0 0px #77afaf;
              margin-left: -5px;
            }
            .side-light.right {
              float: right;
              box-shadow: -2px 2px 0 0px #77afaf;
              margin-right: -5px;
            }
            
            @keyframes directional-blinking {
              0% {
                opacity: 1;
              }
              20% {
                opacity: 0;
              }
              50% {
                opacity: 0;
              }
              70% {
                opacity: 1;
              }
            }
            .text-wrap {
              text-align: center;
              position: relative;
            }
            .text-wrap p {
              text-transform: uppercase;
              color: #6a9faa;
              display: inline-block;
              background: #8bebff;
              padding: 1px 2px;
              margin: 10px 0;
              font-size: 14px;
            }
            .text-wrap:after {
              content: '';
              background: #81a9b3;
              height: 44px;
              display: block;
              margin-top: -5px;
              border-bottom-left-radius: 21px;
              border-bottom-right-radius: 21px;
              box-shadow: inset 0px 35px 0 1px #aee6f2;
            }
            
            .head-light-wrap {
              margin-top: 20px;
              padding-bottom: 34px;
              overflow: hidden;
              position: relative;
            }
            .head-light-wrap:after {
              content: '';
              background: #d6f8ff;
              height: 20px;
              display: block;
              position: relative;
              top: 75px;
              z-index: 1;
              border-top: 5px solid #85c4d2;
            }
            
            .head-light {
              width: 33px;
              height: 20px;
              background: #ffefe3;
              display: inline-block;
              border: 4px solid #799297;
              border-radius: 10px;
              position: relative;
              overflow: hidden;
            }
            .head-light:before {
              content: '';
              position: absolute;
              background: #ffcda7;
              width: 50px;
              height: 50px;
            }
            .head-light.left {
              float: left;
              margin-left: 15px;
            }
            .head-light.left:before {
              transform: rotate(60deg);
              left: 3px;
              top: 7px;
            }
            .head-light.right {
              float: right;
              margin-right: 15px;
            }
            .head-light.right:before {
              transform: rotate(60deg);
              left: 3px;
              top: 7px;
            }
            
            .line-wrap {
              float: left;
              width: 228px;
            }
            
            .line-item {
              display: inline-block;
              margin-right: 8px;
              vertical-align: top;
            }
            .line-item:last-child {
              margin-right: 0;
            }
            .line-item:first-child, .line-item:last-child {
              width: 22px;
            }
            .line-item:nth-child(2), .line-item:nth-child(4) {
              width: 32px;
            }
            .line-item:nth-child(3) {
              width: 40px;
            }
            
            .line-item-list {
              height: 4px;
              background: #64cee3;
              border-radius: 20%;
              margin-bottom: 2px;
            }
            .line-item-list:nth-child(3), .line-item-list:nth-child(6) {
              margin-bottom: 8px;
            }
            
            .number-plate {
              height: 25px;
              background: #495456;
              color: #788a8d;
              max-width: 75px;
              margin: auto;
              font-size: 12px;
              line-height: 26px;
              position: absolute;
              width: 100%;
              border-radius: 4px;
              left: 0;
              right: 0;
              transform: rotate(-5deg);
              bottom: 7px;
              box-shadow: 0px 2px 2px 0px #5b6f73;
            }
            
            .tyre-wrap {
              position: relative;
            }
            .tyre-wrap:before {
              content: '';
              position: absolute;
              width: 320px;
              height: 20px;
              left: 9px;
              top: 5px;
              background: rgba(73, 84, 86, 0.3);
              border-radius: 50%;
            }
            
            .tyre {
              width: 45px;
              height: 18px;
              background: #384142;
              border-radius: 0 0 15px 15px;
              display: inline-block;
            }
            .tyre.left {
              float: left;
              margin-left: 40px;
              box-shadow: inset 45px 6px 0px -10px #495456;
            }
            .tyre.right {
              float: right;
              margin-right: 40px;
              height: 26px;
              box-shadow: inset -45px 6px 0px -10px #495456;
            }
            
            .other-bus-wrap {
              position: absolute;
              top: 145px;
              width: 100%;
            }
            .other-bus-wrap .bus-wrap {
              transform: scale(0.3);
              position: absolute;
            }
            .other-bus-wrap .bus-wrap.purple {
              background: #b284be;
              left: -130px;
              z-index: -1;
            }
            .other-bus-wrap .bus-wrap.purple:before {
              background: #b284be;
            }
            .other-bus-wrap .bus-wrap.green {
              background: #97d8c3;
              right: -130px;
              z-index: -1;
            }
            .other-bus-wrap .bus-wrap.green:before {
              background: #97d8c3;
            }
            .other-bus-wrap .purple .text-wrap p, .other-bus-wrap .purple hr, .other-bus-wrap .purple .line-item-list {
              background: #a878a7;
            }
            .other-bus-wrap .purple .text-wrap p {
              color: #ccc;
            }
            .other-bus-wrap .purple .mirror {
              border-color: #a878a7;
            }
            .other-bus-wrap .green .text-wrap p, .other-bus-wrap .green hr, .other-bus-wrap .green .line-item-list {
              background: #90c9b7;
            }
            .other-bus-wrap .green .text-wrap p {
              color: #4a4a4a;
            }
            .other-bus-wrap .green .mirror {
              border-color: #90c9b7;
            }
            .other-bus-wrap .number-plate {
              transform: rotate(0deg);
            }
            
            .cloud-background-wrap {
              position: relative;
              max-width: 900px;
              margin: 0 auto;
            }
            
            .cloud {
              background: #fff;
              background: -moz-linear-gradient(top, #fff 5%, #f1f1f1 100%);
              background: -webkit-gradient(linear, left top, left bottom, color-stop(5%, #fff), color-stop(100%, #f1f1f1));
              background: -webkit-linear-gradient(top, #fff 5%, #f1f1f1 100%);
              background: -o-linear-gradient(top, #fff 5%, #f1f1f1 100%);
              background: -ms-linear-gradient(top, #fff 5%, #f1f1f1 100%);
              background: linear-gradient(top, #fff 5%, #f1f1f1 100%);
              -webkit-border-radius: 100px;
              -moz-border-radius: 100px;
              border-radius: 100px;
              -webkit-box-shadow: 0 8px 5px rgba(0, 0, 0, 0.1);
              -moz-box-shadow: 0 8px 5px rgba(0, 0, 0, 0.1);
              box-shadow: 0 8px 5px rgba(0, 0, 0, 0.1);
              height: 120px;
              position: absolute;
              width: 350px;
              top: 50px;
              transform: scale(0.3);
              opacity: 0.5;
            }
            .cloud:after, .cloud:before {
              background: #fff;
              content: '';
              position: absolute;
              z-indeX: -1;
            }
            .cloud:before {
              -webkit-border-radius: 200px;
              -moz-border-radius: 200px;
              border-radius: 200px;
              width: 180px;
              height: 180px;
              right: 50px;
              top: -90px;
            }
            .cloud:after {
              -webkit-border-radius: 100px;
              -moz-border-radius: 100px;
              border-radius: 100px;
              height: 100px;
              left: 50px;
              top: -50px;
              width: 100px;
            }
            .cloud.cloud-2 {
              top: 50px;
              right: 0px;
            }
            .cloud.cloud-3 {
              left: 190px;
              top: 100px;
              opacity: 0.3;
              width: 400px;
            }
            .cloud.cloud-3:after {
              left: 95px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
            <div class="cloud-background-wrap">
            <div class="cloud-list">
              <div class="cloud cloud-1"></div>
            </div>
            <div class="cloud-list">
              <div class="cloud cloud-2"></div>
            </div>
            <div class="cloud-list">
              <div class="cloud cloud-3"></div>
            </div>
          </div>  
          <div class="title">
            <span>Sistema de Transporte</span>
            <span>Rhino</span>
          </div>
          <div class="bus-container">
            <div class="bus-wrap main">
              <div class="side-mirror-wrap">
                <div class="side-mirror left">
                  <div class="rode-1"></div>
                  <div class="rode-2"></div>
                </div>
                <div class="side-mirror right">
                  <div class="rode-1"></div>
                  <div class="rode-2"></div>
                </div>
              </div>
              <div class="mirror">
                <div class="people-wrap">
                  <div class="people"></div>
                  <div class="people"></div>
                  <div class="people"></div>
                  <div class="people"></div>
                  <div class="people"></div>
                  <div class="people"></div>
                  <div class="people"></div>
                  <div class="people"></div>
                </div>
                <div class="steering"></div>
              </div>
              <hr />
              <div class="side-light-wrap">
                <div class="side-light left">
                  <div class="side-light__on"></div>
                </div>
                <div class="side-light right">
                  <div class="side-light__on"></div>
                </div>
              </div>
              <div class="text-wrap">
                <p>Rhino Express</p>
                <div class="head-light-wrap clearfix">
                  <div class="head-light left"></div>
                  <div class="line-wrap">
                    <div class="line-item">
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                    </div>
                    <div class="line-item">
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                    </div>
                    <div class="line-item">
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                    </div>
                    <div class="line-item">
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                    </div>
                    <div class="line-item">
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                      <div class="line-item-list"></div>
                    </div>
                  </div>
                  <div class="head-light right"></div>
                </div>
                <div class="number-plate">
                  <span>NA 1A 2345</span>
                </div>
              </div>
              <div class="tyre-wrap">
                <div class="tyre left"></div>
                <div class="tyre right"></div>
              </div>
            </div>
            <div class="other-bus-wrap">
              <div class="bus-wrap purple">
                <div class="side-mirror-wrap">
                  <div class="side-mirror left">
                    <div class="rode-1"></div>
                    <div class="rode-2"></div>
                  </div>
                  <div class="side-mirror right">
                    <div class="rode-1"></div>
                    <div class="rode-2"></div>
                  </div>
                </div>
                <div class="mirror">
                  <div class="people-wrap">
                    <div class="people"></div>
                    <div class="people"></div>
                    <div class="people"></div>
                    <div class="people"></div>
                    <div class="people"></div>
                    <div class="people"></div>
                    <div class="people"></div>
                    <div class="people"></div>
                  </div>
                  <div class="steering"></div>
                </div>
                <hr />
                <div class="side-light-wrap">
                  <div class="side-light left"></div>
                  <div class="side-light right"></div>
                </div>
                <div class="text-wrap">
                  <p>Dashain Express</p>
                  <div class="head-light-wrap clearfix">
                    <div class="head-light left"></div>
                    <div class="line-wrap">
                      <div class="line-item">
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                      </div>
                      <div class="line-item">
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                      </div>
                      <div class="line-item">
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                      </div>
                      <div class="line-item">
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                      </div>
                      <div class="line-item">
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                      </div>
                    </div>
                    <div class="head-light right"></div>
                  </div>
                  <div class="number-plate">
                    <span>NA 1A 2345</span>
                  </div>
                </div>
                <div class="tyre-wrap">
                  <div class="tyre left"></div>
                  <div class="tyre right"></div>
                </div>
              </div>
              <div class="bus-wrap green">
                <div class="side-mirror-wrap">
                  <div class="side-mirror left">
                    <div class="rode-1"></div>
                    <div class="rode-2"></div>
                  </div>
                  <div class="side-mirror right">
                    <div class="rode-1"></div>
                    <div class="rode-2"></div>
                  </div>
                </div>
                <div class="mirror">
                  <div class="people-wrap">
                    <div class="people"></div>
                    <div class="people"></div>
                    <div class="people"></div>
                    <div class="people"></div>
                    <div class="people"></div>
                    <div class="people"></div>
                    <div class="people"></div>
                    <div class="people"></div>
                  </div>
                  <div class="steering"></div>
                </div>
                <hr />
                <div class="side-light-wrap">
                  <div class="side-light left"></div>
                  <div class="side-light right"></div>
                </div>
                <div class="text-wrap">
                  <p>Dashain Express</p>
                  <div class="head-light-wrap clearfix">
                    <div class="head-light left"></div>
                    <div class="line-wrap">
                      <div class="line-item">
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                      </div>
                      <div class="line-item">
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                      </div>
                      <div class="line-item">
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                      </div>
                      <div class="line-item">
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                      </div>
                      <div class="line-item">
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                        <div class="line-item-list"></div>
                      </div>
                    </div>
                    <div class="head-light right"></div>
                  </div>
                  <div class="number-plate">
                    <span>NA 1A 2345</span>
                  </div>
                </div>
                <div class="tyre-wrap">
                  <div class="tyre left"></div>
                  <div class="tyre right"></div>
                </div>
              </div>
            </div>
          </div>
            </div>
        </div>
    </body>
</html>
