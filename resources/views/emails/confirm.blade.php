<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>注册确认链接</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<h1 class="text-2xl font-bold mb-4">感谢您在 Weibo App 网站进行注册！</h1>

<p class="mb-4">
    请点击下面的链接完成注册：
    <a href="{{ route('confirm_email', $user->activation_token) }}" class="text-blue-500 hover:text-blue-700">
        {{ route('confirm_email', $user->activation_token) }}
    </a>
</p>

<p>
    如果这不是您本人的操作，请忽略此邮件。
</p>
</body>
</html>
