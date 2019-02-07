
plugin.tx_demo_content123 {
    view {
        # cat=plugin.tx_demo_content123/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:demo/Resources/Private/Templates/
        # cat=plugin.tx_demo_content123/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:demo/Resources/Private/Partials/
        # cat=plugin.tx_demo_content123/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:demo/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_demo_content123//a; type=string; label=Default storage PID
        storagePid =
    }
}
