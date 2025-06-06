<svg width="7680" height="4320" xmlns="http://www.w3.org/2000/svg">
    <defs>
        <!-- Grade menor a cada 10px -->
        <pattern id="smallGrid" width="10" height="10" patternUnits="userSpaceOnUse">
            <path d="M 10 0 L 0 0 0 10" fill="none" stroke="#222" stroke-width="0.5"/>
        </pattern>

        <!-- Grade maior a cada 100px, sobreposta à menor -->
        <pattern id="bigGrid" width="25" height="25" patternUnits="userSpaceOnUse">
            <rect width="50" height="50" fill="url(#smallGrid)" />
            <path d="M 100 0 L 0 0 0 100" fill="none" stroke="#555" stroke-width="1"/>
        </pattern>
    </defs>

    <!-- Fundo preto e aplicação da grade -->
    <rect width="100%" height="100%" fill="#111" />
    <rect width="100%" height="100%" fill="url(#bigGrid)" />
</svg>
