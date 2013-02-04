<!DOCTYPE html>
<html>
  <head>
    <title>National Youth Party</title>
	<link rel="stylesheet" type="text/css" href="styles/layout.css" />
	<meta http-equiv="description" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/jMenu.jquery.css" type="text/css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jMenu.jquery.js"></script>
  </head>
  <body>
    <ul id="jMenu">
            <li>
                <a class="fNiv">Category 1</a>
                <ul>
                    <li class="arrow"></li>
                    <li>
                        <a>Category 1.2</a>
                        <ul>
                            <li><a>Category 1.3</a></li>
                            <li><a>Category 1.3</a></li>
                            <li><a>Category 1.3</a></li>
                            <li><a>Category 1.3</a></li>
                            <li>
                                <a>Category 1.3</a>
                                <ul>
                                    <li><a>Category 1.4</a></li>
                                    <li><a>Category 1.4</a></li>
                                    <li><a>Category 1.4</a></li>
                                    <li>
                                        <a>Category 1.4</a>
                                        <ul>
                                            <li><a>Category 1.5</a></li>
                                            <li><a>Category 1.5</a></li>
                                            <li>
                                                <a>Category 1.5</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a>Category 1.4</a></li>
                                    <li><a>Category 1.4</a></li>
                                </ul>
                            </li>
                            <li><a>Category 1.3</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </li>

            <li>
                <a class="fNiv">Category 2</a>
            </li>

            <li>
                <a class="fNiv">Category 3</a>
                
            </li>

            <li>
                <a class="fNiv">Category 4</a>
                
            </li>

            <li>
                <a class="fNiv">Category 5</a>
                <ul>
                    <li class="arrow"></li>
                    <li>
                        <a>Category 5.2</a>
                        <ul>
                            <li><a>Category 5.3</a></li>
                            <li><a>Category 5.3</a></li>
                            <li><a>Category 5.3</a></li>
                            <li><a>Category 5.3</a></li>
                        </ul>
                    </li>
                    <li><a>Category 5.2</a></li>
                    <li><a>Category 5.2</a></li>
                    <li><a>Category 5.2</a></li>
                </ul>
            </li>

            <li><a class="fNiv">Category 6</a></li>

            <li>
                <a class="fNiv">Category 7</a>
            </li>
        </ul>
		<script type="text/javascript">
            $(document).ready(function() {
                $("#jMenu").jMenu();
            });
        </script>
    <div id="container_1" class="wrapper">yo</div>
  </body>
</html>