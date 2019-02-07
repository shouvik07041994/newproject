
plugin.tx_fxemp_list {
    view {
        # cat=plugin.tx_fxemp_list/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:fx_emp/Resources/Private/Templates/
        # cat=plugin.tx_fxemp_list/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:fx_emp/Resources/Private/Partials/
        # cat=plugin.tx_fxemp_list/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:fx_emp/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_fxemp_list//a; type=string; label=Default storage PID
        storagePid =
    }
}
