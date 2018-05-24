<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>

            <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    {{--<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}

    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    {{--<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">--}}

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    {{--<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}
</head>
<body>
    <div class="container">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-condensed">
                <thead>
                <tr class="success">
                    <th>表格标题表格标题表格标题</th>
                    <th>表格标题表格标题表格标题</th>
                    <th>表格标题表格标题表格标题</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>表格内容表格内容表格内容</td>
                    <td>表格内容表格内容表格内容</td>
                    <td>表格内容表格内容表格内容</td>
                </tr>
                <tr>
                    <td>表格内容表格内容表格内容</td>
                    <td>表格内容表格内容表格内容</td>
                    <td>表格内容表格内容表格内容</td>
                </tr>
                <tr>
                    <td>表格内容表格内容表格内容</td>
                    <td>表格内容表格内容表格内容</td>
                    <td>表格内容表格内容表格内容</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>



</body>
</html>