/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IAppointment } from "../../interfaces/interfaces";

type IBody = IAppointment;

export const readAppointment = async (): Promise<IBody[] | null> => {
  const result: IBody[] | null = await customFetch.get({
    url: `/appointments`,
  });
  return result;
};

