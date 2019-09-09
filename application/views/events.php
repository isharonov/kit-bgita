<article class="year">

    <?php foreach ($events as $key => $value): ?>

        <h2 id="<?php echo $key; ?>"><?php echo $key; ?></h2>

        <div class='card-columns'>

            <?php foreach ($value as $event): ?>

                <div class="card text-center">

                    <?php if ($event->is_portrait): ?>

                        <div class="row no-gutters">
                            <div class="col-4">
                                <img src="<?php echo $event->poster; ?>" class="card-img" alt="<?php echo $event->poster_desc; ?>">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $event->title; ?></h5>
                                </div>
                            </div>
                        </div>

                    <?php else: ?>

                        <?php if ($event->poster): ?>
                            <img src="<?php echo $event->poster; ?>" class="card-img-top" alt="<?php echo $event->poster_desc; ?>">
                        <?php endif; ?>

                        <div class="card-body">

                            <h5 class="card-title"><?php echo $event->title; ?></h5>

                            <?php if ($event->text): ?>
                                <p class="card-text"><?php echo $event->text; ?></p>
                            <?php endif; ?>

                            <?php if ($event->action): ?>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#graduates<?php echo $key; ?>">Список выпускников</button>

                                <div class="modal fade" id="graduates<?php echo $key; ?>" tabindex="-1" role="dialog" aria-labelledby="graduates<?php echo $key; ?>Title" aria-hidden="true">
							        <div class="modal-dialog modal-lg" role="document">
								        <div class="modal-content">
									        <div class="modal-header">
										        <h5 class="modal-title" id="graduates<?php echo $key; ?>Title">Выпуск специалистов - <?php echo $key; ?></h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											        <span aria-hidden="true">&times;</span>
										        </button>
									        </div>
									        <div class="modal-body">
                                                <ul class="list-unstyled text-left">

                                                <?php foreach ($graduates as $year => $persons): ?>
                                                    <?php if ($year === $key):?>
                                                        <?php foreach ($persons as $person): ?>
                                                        <li class="media">
                                                            <?php if ($person->is_red):?>
                                                                <img class="mr-3" src="images/diplom_red.png" alt="Красный диплом">
                                                            <?php else: ?>
                                                                <img class="mr-3" src="images/diplom_blue.png" alt="Синий диплом">
                                                            <?php endif; ?>
                                                            <div class="media-body">
                                                                <h5 class="mt-0 mb-1">
                                                                    <?php if ($person->vk_id):?>
                                                                        <a href="http://vk.com/<?php echo $person->vk_id; ?>"><?php echo $person->name; ?></a>
                                                                    <?php else: ?>
                                                                        <?php echo $person->name; ?>
                                                                    <?php endif; ?>
                                                                </h5>
                                                                <?php echo $person->thesis; ?>
                                                            </div>
                                                        </li>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>

                                                </ul>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                                            </div>
								        </div>
							        </div>
						        </div>
                            <?php endif; ?>

                        </div>

                    <?php endif; ?>

                </div>

            <?php endforeach; ?>

        </div>

    <?php endforeach; ?>

</article>