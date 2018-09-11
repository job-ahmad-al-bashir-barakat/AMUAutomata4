<style id="globalStyle">
    .theme-color {
        background-color: {{ $_COOKIE['controlThemeColorRGB'] ?? 'rgb(91, 192, 222)' }};
    }

    .pace {
        -webkit-pointer-events: none;
        pointer-events: none;

        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    .pace-inactive {
        display: none;
    }

    .pace .pace-progress {
        background: {{ $_COOKIE['controlThemeColorRGB'] ?? 'rgb(91, 192, 222)' }};
        position: absolute;
        z-index: 2000;
        top: 0;
        right: 100%;
        width: 100%;
        height: 3px;
    }
</style>