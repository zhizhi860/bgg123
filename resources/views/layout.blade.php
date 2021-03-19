<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        body{
            background-color: #000000
        }

        #logo{
            width: fit-content;
            height: fit-content;
            display: inline-block;
            font-size: 3rem;
            color:rgba(252, 252, 252, 0.842);
			animation: change 5s linear 0s infinite;
        }
        @keyframes change {
                0%{
                    color: rgb(241, 28, 28);
                }
				14% {
					color: rgb(253, 116, 116);
				}
				28% {
					color: rgb(231, 168, 31);
				}
				42% {
					color: rgb(211, 247, 52);
				}
				56% {
					color: rgb(31, 248, 67);
				}
				70% {
					color: rgb(69, 138, 243);
				}
                84% {
					color: rgb(131, 118, 245);
				}
                100% {
					color: rgb(69, 0, 90);
				}
			}
        #logo1{
            width: fit-content;
            height:100%;
            display: inline-block;
            font-size: 2rem;
            color:rgba(252, 252, 252, 0.842);
            margin-left: 3rem;
        }
        .HomePage{
            color:rgba(252,252,252,0.842);
            text-decoration: none;
        }
        .HomePage:hover{
            color:rgb(87, 228, 181);
        }
        .about{
            color:rgba(252,252,252,0.842);
            text-decoration: none;
        }
        .about:hover{
            color:rgb(87,288,181);
        }
        #logo2{
            width: fit-content;
            height: fit-content;
            display: inline-block;
            font-size: 2rem;
            color:rgba(252, 252, 252, 0.842);
            margin-left: 3rem;
        }
        #setting{
            background-color: #000000;
            width: 90%;
            height: 95px;
            margin-left: -40px;
            margin-top: -10px;
            padding: 20px 0px 0px 50px;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            border-bottom: 3px #3d3636 solid;
        }
        .article{
            font-size: 2rem;
            margin:0 auto;
            text-align: center;
            width:100%;
            height: 100%;
            background-color: rgb(0, 0, 0);
            color:rgba(252,252,252,0.842);
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        }
        .article1{
            font-size:1.3rem;
            text-align: left;
            width: fit-content;
            height: fit-content;
            padding-left: 30%;
            margin-top: 40px;
        }
        #loop_a{
            color:#8fb3e9;
            cursor: pointer;
            text-decoration: none;
            font-size: 1.5rem;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            font-weight: 700;
        }
        #create{
            background-color: #8fb3e9;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            color:rgba(252,252,252,0.842);
            width: 230px;
            height: 33px;
            margin-top: 5%;
            border: 0px;
            font-size: 1.1rem;
            font-weight: 600;
            position: absolute;
            top: 19%;
            right: 3%;
        }
        #in_create{
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            color:rgba(252,252,252,0.842);
            width: 100%;
            height: fit-content;
            margin-top: 10px;
            font-size: 1.9rem;
            font-weight: 700;
            text-align: center;
        }
        #create_title{
            display: block;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            color:rgba(252, 252, 252, 0.863);
            background-color: #424b53f5;
            width:45%;
            height: 45px;
            margin-top: 10px;
            font-size: 1.9rem;
            font-weight: 700;
            text-align: center;
            margin-left: 27%;
            margin-top: 30px;
            border: none;
            outline: none;
        }
        input::placeholder{
            color:rgba(252, 252, 252, 0.555);
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        }
        #create_content{
            display: block;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            color:rgba(252, 252, 252, 0.863);
            background-color: #424b53f5;
            width:45%;
            height: 350px;
            margin-top: 10px;
            font-size: 1.9rem;
            font-weight: 700;
            margin-left: 27%;
            margin-top: 10px;
            border: none;
            outline: none;
        }
        #create_btn{
            display: inline-block;
            position: relative;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            color:rgba(252, 252, 252, 0.863);
            background-color: #424b53f5;
            width:20%;
            height: 45px;
            margin-top: 40px;
            font-size: 1.5rem;
            font-weight: 500;
            margin-left: 27%;
            margin-top: 10px;
            border: none;
            outline: none;
        }
        .back{
            display: inline-block;
            position: relative;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            color:rgba(252, 252, 252, 0.863);
            background-color: #424b53f5;
            width:20%;
            height: 45px;
            margin-top: 40px;
            font-size: 1.5rem;
            font-weight: 500;
            margin-left: 70px;
            margin-top: 10px;
            border: none;
            outline: none;
        }

        #in_edit{
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            color:rgba(252,252,252,0.842);
            width: 100%;
            height: fit-content;
            margin-top: 10px;
            font-size: 1.9rem;
            font-weight: 700;
            text-align: center;
        }
        #show_your_title{
            width: 100%;
            height: fit-content;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            color:rgba(252,252,252,0.842);
            font-size: 3rem;
            margin-top: 30px;
            font-weight: 700;
            text-align: center;
        }
        #show_your_des{
            width: 70%;
            height: 400px;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            color:rgba(252,252,252,0.842);
            font-size: 1.5rem;
            margin-top: 30px;
            font-weight: 700;
            text-align: left;
            padding-left: 20%;
        }
        #edit{
            display: inline-block;
            position: relative;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            color:rgba(252, 252, 252, 0.863);
            background-color: #424b53f5;
            width:10%;
            height: 45px;
            margin-top: 40px;
            font-size: 1.5rem;
            font-weight: 500;
            margin-left: 20%;
            margin-top: 10px;
            border: none;
            outline: none;
            text-decoration: none;
            text-align: center;
        }
        #edit_title{
            display: block;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            color:rgba(252, 252, 252, 0.863);
            background-color: #424b53f5;
            width:45%;
            height: 45px;
            margin-top: 10px;
            font-size: 1.9rem;
            font-weight: 700;
            text-align: center;
            margin-left: 27%;
            margin-top: 30px;
            border: none;
            outline: none;
        }
        #edit_content{
            display: block;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            color:rgba(252, 252, 252, 0.863);
            background-color: #424b53f5;
            width:45%;
            height: 350px;
            margin-top: 10px;
            font-size: 1.9rem;
            font-weight: 700;
            margin-left: 27%;
            margin-top: 10px;
            border: none;
            outline: none;
        }
        #update{
            display: inline-block;
            position: relative;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            color:rgba(252, 252, 252, 0.863);
            background-color: #424b53f5;
            width:20%;
            height: 45px;
            margin-top: 40px;
            font-size: 1.5rem;
            font-weight: 500;
            margin-left: 27%;
            margin-top: 10px;
            border: none;
            outline: none;
        }
        #delete{
            display: block;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            color:rgba(252, 252, 252, 0.863);
            background-color: #424b53f5;
            width:20%;
            height: 45px;
            margin-top: -81px;
            font-size: 1.5rem;
            font-weight: 500;
            margin-left: 52%;
            border: none;
            outline: none;
        }
        #show_your_des1{
            display: block;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            color:rgba(252,252,252,0.842);
            background-color: #000000;
            width: 60%;
            height: 400px;
            font-size: 1.6rem;
            font-weight: 700;
            margin-top: 30px;
            border: none;
            outline: none;
            text-align: left;
            padding-left: 20%;
        }
        #hot_pot{
            width: 100%;
            height: fit-content;
            margin: 0 auto;
        }
        /*a {
            color: #3273dc;
            cursor: pointer;
            text-decoration: none;
        }
        a strong {
            color: currentColor;
        }

        a:hover {
            color: #363636;
        }*/
    </style>
</head>
<body>

    <!--<ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About Me</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>-->

    <div class="container">
        @yield('content')

    </div>

</body>
</html>
