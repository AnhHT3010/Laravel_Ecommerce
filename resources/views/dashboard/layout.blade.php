<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.7
*
-->

<!DOCTYPE html>
<html>

<head>
    @include('dashboard.component.head')
</head>

<body>
    <div id="wrapper">
        @include('dashboard.component.sidebar')
        <div id="page-wrapper" class="gray-bg dashbard-1">
            @include('dashboard.component.nav')
            {{-- @include('dashboard.component.chart') --}}
            @include($template)
            @include('dashboard.component.footer')
            @include('dashboard.component.chatbot')
        </div>
    </div>
    @include('dashboard.component.script')
</body>
</html>
