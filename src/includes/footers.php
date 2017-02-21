<?php
function getFooters(){
    $foot = "
    <footer>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1'>
                    <ul class='list-inline text-center'>
                        <li>
                            <a href='https://twitter.com/_kablaa'>
                                <span class='fa-stack fa-lg'>
                                    <i class='fa fa-circle fa-stack-2x'></i>
                                    <i class='fa fa-twitter fa-stack-1x fa-inverse'></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href='https://github.com/kablaa'>
                                <span class='fa-stack fa-lg'>
                                    <i class='fa fa-circle fa-stack-2x'></i>
                                    <i class='fa fa-github fa-stack-1x fa-inverse'></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
";
    return $foot;
}
?>