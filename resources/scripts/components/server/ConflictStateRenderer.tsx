import React from 'react';
import { ServerContext } from '@/state/server';
import ScreenBlock from '@/components/elements/ScreenBlock';
import ServerInstallSvg from '@/assets/images/server_installing.svg';
import ServerErrorSvg from '@/assets/images/server_error.svg';
import ServerRestoreSvg from '@/assets/images/server_restore.svg';

export default () => {
    const status = ServerContext.useStoreState((state) => state.server.data?.status || null);
    const isTransferring = ServerContext.useStoreState((state) => state.server.data?.isTransferring || false);
    const isNodeUnderMaintenance = ServerContext.useStoreState(
        (state) => state.server.data?.isNodeUnderMaintenance || false
    );

    return status === 'installing' || status === 'install_failed' || status === 'reinstall_failed' ? (
        <ScreenBlock
            title={'Запуск установщика'}
            image={ServerInstallSvg}
            message={'Ваш сервер скоро будет готов. Повторите попытку через несколько минут..'}
        />
    ) : status === 'suspended' ? (
        <ScreenBlock
            title={'Сервер приостановлен'}
            image={ServerErrorSvg}
            message={'Этот сервер приостановлен и недоступен.'}
        />
    ) : isNodeUnderMaintenance ? (
        <ScreenBlock
            title={'Нода на обслуживании'}
            image={ServerErrorSvg}
            message={'Нода этого сервера в настоящее время находится на обслуживании.'}
        />
    ) : (
        <ScreenBlock
            title={isTransferring ? 'Передача' : 'Восстановление из резервной копии'}
            image={ServerRestoreSvg}
            message={
                isTransferring
                    ? 'Ваш сервер переносится на новую ноду, зайдите позже.'
                    : 'В настоящее время ваш сервер восстанавливается из резервной копии, повторите попытку через несколько минут..'
            }
        />
    );
};
