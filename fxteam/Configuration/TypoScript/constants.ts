
plugin.tx_fxteam_fzteam {
    view {
        # cat=plugin.tx_fxteam_fzteam/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:fxteam/Resources/Private/Templates/
        # cat=plugin.tx_fxteam_fzteam/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:fxteam/Resources/Private/Partials/
        # cat=plugin.tx_fxteam_fzteam/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:fxteam/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_fxteam_fzteam//a; type=string; label=Default storage PID
        storagePid =
    }
}
