<svg width="7680" height="4320" xmlns="http://www.w3.org/2000/svg" class="bg-base-200">
    <defs>
        <style>
            .thats-it {
                fill: none;
                stroke: var(--color-base-300);
            }
            .work-please {
                fill: var(--color-base-200);
            }
        </style>

        <!-- Small grid every 10px -->
        <pattern id="smallGrid" width="10" height="10" patternUnits="userSpaceOnUse">
            <path d="M 10 0 L 0 0 0 10" fill="none" class="thats-it" stroke-width="0.5"/>
        </pattern>

        <!-- Big grid every 25px, overlaid on small -->
        <pattern id="bigGrid" width="25" height="25" patternUnits="userSpaceOnUse">
            <rect width="50" height="50" fill="url(#smallGrid)"/>
            <path d="M 100 0 L 0 0 0 100" class="stroke-primary/20" stroke-width="1"/>
        </pattern>
    </defs>

    <rect width="100%" height="100%" class="work-please"/>
    <rect width="100%" height="100%" fill="url(#bigGrid)"/>
</svg>

