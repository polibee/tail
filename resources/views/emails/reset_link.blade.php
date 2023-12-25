<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>找回密码</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet"> <!-- 导入 Tailwind CSS 样式表 -->
</head>
<body class="bg-gray-100">
<div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold mb-6">您正在尝试找回密码</h1>

    <p class="mb-4">
        请点击以下链接进入下一步操作：
        <a href="{{ route('password.reset', $token) }}" class="text-blue-500 hover:underline">
            {{ route('password.reset', $token) }}
        </a>
    </p>

    <p class="text-gray-500">
        如果这不是您本人的操作，请忽略此邮件。
    </p>
</div>
</body>
</html>
