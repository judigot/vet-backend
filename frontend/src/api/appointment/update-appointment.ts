/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IAppointment } from "../../interfaces/interfaces";

type IBody = IAppointment;

export const updateAppointment = async (formData: IBody): Promise<IBody> => {
  const result: IBody = await customFetch.patch({
    url: `/appointments`,
    body: JSON.stringify(formData),
  });
  return result;
};

