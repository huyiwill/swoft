<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>角色管理</title>

    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="form row">
        <div class="bs-example" data-example-id="hoverable-table">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>类型</th>
                    <th>名称</th>
                    <th>说明</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $item): ?>
                    <tr>
                        <th scope="row"><?= $item['id']?></th>
                        <td><?= $roleType[$item['type']] ?></td>
                        <td><?= $item['name']?></td>
                        <td><?= $item['desc']?></td>
                        <td>
                            <a href="/role/user/<?= $item['id']?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
                            <a href="/role/edit/<?= $item['id']?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            <a href="/role/del/<?= $item['id']?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>