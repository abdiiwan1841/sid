<?php $pager->setSurroundCount(2) ?>
<!--begin::Pagination-->
<div class="d-flex justify-content-between align-items-center flex-wrap">
    <div class="d-flex flex-wrap py-2 mr-3">
        <?php if ($pager->hasPrevious()) : ?>
            <a href="<?= $pager->getFirst() ?>" class="btn btn-icon btn-sm btn-light mr-2 my-1" aria-label="<?= lang('Pager.first') ?>">
                <i class="ki ki-bold-double-arrow-back icon-xs"></i>
            </a>
            <a href="<?= $pager->getPrevious() ?>" class="btn btn-icon btn-sm btn-light mr-2 my-1" aria-label="<?= lang('Pager.previous') ?>">
                <i class="ki ki-bold-arrow-back icon-xs"></i>
            </a>
        <?php endif ?>
        <?php foreach ($pager->links() as $link) : ?>
            <a href="<?= $link['uri'] ?>" class="btn btn-icon btn-sm border-0 btn-light btn-hover-primary <?= $link['active'] ? 'active' : '' ?> mr-2 my-1"><?= $link['title'] ?></a>
        <?php endforeach ?>
        <?php if ($pager->hasNext()) : ?>
            <a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>" class="btn btn-icon btn-sm btn-light mr-2 my-1">
                <i class="ki ki-bold-arrow-next icon-xs"></i>
            </a>
            <a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>" class="btn btn-icon btn-sm btn-light mr-2 my-1">
                <i class="ki ki-bold-double-arrow-next icon-xs"></i>
            </a>
        <?php endif ?>
    </div>
    <!-- <div class="d-flex align-items-center py-3">
        <div class="d-flex align-items-center">
            <div class="mr-2 text-muted">Loading...</div>
            <div class="spinner mr-10"></div>
        </div>
        <select class="form-control form-control-sm font-weight-bold mr-4 border-0 bg-light" style="width: 75px;">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        <span class="text-muted">Displaying 10 of 230 records</span>
    </div> -->
</div>
<!--end:: Pagination-->